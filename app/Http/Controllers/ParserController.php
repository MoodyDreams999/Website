<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class ParserController extends Controller
{
    public function showForm()
    {
        return view('parse_form');
    }

    public function uploadAndParse(Request $request)
    {
        // Validate the uploaded file and input data
        $request->validate([
            'fileToParse' => 'required|file|mimes:xlsx|max:50000',
            'source' => 'required|string',
            'loanType' => 'required|string',
        ]);

        // Store the uploaded file
        $uploadedFile = $request->file('fileToParse');
        $originalFileName = $uploadedFile->getClientOriginalName();
        $filePath = $uploadedFile->storeAs('uploads', $originalFileName);

        // Prepare paths
        $storagePath = storage_path('app/' . $filePath);
        $outputFileName = 'parsed_' . $originalFileName;
        $outputFilePath = storage_path('app/outputs/' . $outputFileName);

        // Path to Perl script (use double backslashes on Windows)
        $perlScriptPath = storage_path('scripts/ListParser.pl');  
		echo storage_path('scripts/ListParser.pl');


        // Prepare the command for running the Perl script
        $command = [
            'perl',
            $perlScriptPath,
            '--source', escapeshellarg($request->source),
            '--LoanType', escapeshellarg($request->loanType),
            '--infile', escapeshellarg($storagePath),
            '--outfile', escapeshellarg($outputFilePath)
        ];

       $process = new Process($command);
		$process->run();

		// Check if the process failed
		if (!$process->isSuccessful()) {
			// Log the error or debug output
			\Log::error('Perl script failed: ' . $process->getErrorOutput());
			return back()->with('error', 'Error during parsing: ' . $process->getErrorOutput());
		}

		// Serve the parsed file for download
		if (Storage::exists('outputs/' . $outputFileName)) {
			return response()->download($outputFilePath)->deleteFileAfterSend(true);
		} else {
			return back()->with('error', 'Error parsing the file.');
		}

    }
}
