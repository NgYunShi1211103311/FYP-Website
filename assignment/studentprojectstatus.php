<!DOCTYPE html>
<head>
    <title>Project Status</title>
    <link rel="stylesheet" href="studentprojectstatus.css">
</head>
<body>
    <div class="sidebar">
        <h2>FYP Page</h2>
        <br>
        <hr>
        <ul>
            <li><a href="studentdashboard.html">Dashboard</a></li>
            <li><a href="studentprojectstatus.html">Project</a></li>
            <li><a href="meetings.html">Meetings</a></li>
            <li><a href="goals.html">Goals and Progress</a></li>
            <li><a href="settings.html">Settings</a></li>
        </ul>
    </div>
    <div class="student_projectstatus">
        <h1>Project Status</h1>
        <table class="projecttable">
            <thead>
                <tr>
                    <th>Project Code</th>
                    <th>Project Name</th>
                    <th>Supervisor Name</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>FYP1</td>
                    <td>Project 1</td>
                    <td>Dr. JASMINE</td>
                    <td class="status approved">Approved</td>
                </tr>
                <tr>
                    <td>FYP2</td>
                    <td>Project 2</td>
                    <td>Dr. YAP</td>
                    <td class="status pending">Pending</td>
                </tr>
                <tr>
                    <td>FYP3</td>
                    <td>Project 3</td>
                    <td>Dr. PENG</td>
                    <td class="status rejected">Rejected</td>
                </tr>
            </tbody>
        </table>
        <button class="addbutton" aria-label="Add a new project">+</button>
    </div>
</body>
</html>
