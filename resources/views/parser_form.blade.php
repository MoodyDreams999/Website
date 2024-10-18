<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Parse File</title>
</head>
<body>
    <h1>Upload File to Parse</h1>
    <form action="{{ route('parse.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="fileToParse">Upload File:</label>
        <input type="file" name="fileToParse" id="fileToParse" required>

        <label for="source">Source:</label>
        <input type="text" name="source" id="source" placeholder="Enter source" required>

        <label for="loanType">Loan Type:</label>
        <select name="loanType" id="loanType">
            <option value="DEBT">DEBT</option>
            <option value="VA">VA</option>
            <option value="Mixed">Mixed</option>
        </select>

        <button type="submit">Parse and Download File</button>
    </form>
</body>
</html>
