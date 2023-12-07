<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Store Metrics Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row mb-2">          
                <a type="submit" class="btn btn-primary ml-3" href="{{ route('store-commit-frequency', ['username' => 'octocat', 'repoName' => 'Hello-World']) }}">Store Commit Frequency</a>
            </div>
            <div></div>
            <div class="row mb-2">          
                <a type="submit" class="btn btn-primary ml-3" href="{{ route('store-code-review-involvement', ['username' => 'octocat', 'repoName' => 'Hello-World']) }}">Store Code Review Involvement</a>
            </div>
            <div></div>
            <div class="row mb-2">          
                <a type="submit" class="btn btn-primary ml-3" href="{{ route('store-issue-resolution-time', ['username' => 'octocat', 'repoName' => 'Hello-World']) }}">Store Issue Resolution Time</a>
            </div>
            <div></div>
            <div class="row mb-2">          
                <a type="submit" class="btn btn-primary ml-3" href="{{ route('store-code-churn', ['username' => 'octocat', 'repoName' => 'Hello-World']) }}">Store Code Churn</a>
            </div>
    </div>
</body>

</html>