<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alongkod</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <button id="btnBack"> back </button>
    <div id="main">
        <table>
            <thead>
                <tr>
                    <th>ID</th> <th>Title</th><th> Details </th>
                </tr>
            </thead>
            <tbody id="tblPosts">
            </tbody>
        </table>
    </div>

    <div id="Detail">
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Userid</th>
                </tr>
            </thead>
            <tbody id="tblDetails">
            </tbody>
        </table>
    </div>

    <button id="btnment"> comment </button>
    <div id="Comments">
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Userid</th>
                </tr>
            </thead>
            <tbody id="tblComments">
            </tbody>
        </table>
    </div>

</body>
<script>
    function showDetails(id) {
        $("#main").hide();
        $("#etail").show();
        // console.log(id);
        var url = "https://jsonplaceholder.typicode.com/posts/" + id;
        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='detailROW'";
                line += "><td>" + data.id + "</td>"
                line += "<td><b>" + data.title + "</b><br/>"
                line += data.body + "</td>"
                line += "<td>" + data.userId + "</td>"
                line += "</tr>";
                $("#tblDetails").append(line);
            })
            .fail((xhr, status, error) => {
            })
    }

    function loadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts";

        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    // console.log(item);
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>";
                    line += "<td><b>" + item.title + "</b><br/>";
                    line += item.body + "</td>";
                    line += "<td> <button onClick='showDetails(" + item.id + ");' > link </button> </td>";
                    line += "</tr>";
                    $("#tblPosts").append(line);
                });
                $("#main").show();
            })
            .fail((xhr, status, error) => {
            })
    }

    function loadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts/" +comments;

        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    // console.log(item);
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>";
                    line += "<td><b>" + item.title + "</b><br/>";
                    line += item.body + "</td>";
                    line += "<td> <button onClick='showDetails(" + item.id + ");' > link </button> </td>";
                    line += "</tr>";
                    $("#tblComments").append(line);
                });
                $("#main").show();
            })
            .fail((xhr, status, error) => {
            })

    $(() => {
        loadPosts();
        $("#detail").hide();
        
        $("#btnBack").click(() => {
            $("#main").show();
            $("#detail").hide();
            $("#detailROW").remove();
            $("#Comments").show();

        });
    })
</script>

</html>
