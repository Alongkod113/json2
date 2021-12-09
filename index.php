<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <button id="btnBack"> back </button>
  <div id="main">
      <table>
          <thead>
            <tr>
              <th>postId</th><br/>

              <th>id</th>
              <th>name</th>
              <th>email</th>
              <th>body</th>
          </tr>
          </thead>
          <tbody id="tblPost">
          </tbody>
      </table>
  </div>
  <div id="comments">
      <table>
          <thead>
               <tr>
                <th>postId</th><br/>

                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>body</th>
              </tr>
          </thead>
          <tbody id="tblcommets">
          </tbody>
      </table>
  </div>
  
</body>
<script>
   function LoadPosts() {
        $("#main").show();
        $("#comments").hide();
        var url = "https://jsonplaceholder.typicode.com/comments"
        $.getJSON(url)
            .done((data) => {
              $.each(data, (k, item) => {
                    var line = "<tr id='comments'";
                    line += "<td>" + item.postID + "</td>"
                    line += "<td><b>" + item.id + "</b><br/>"
                    line += "<td><b>" + item.name+ "</b><br/>"
                    line += "<td><b>" + item.email + "</b><br/>"
                    line +=  item.body+ "</td>"
                
                    line += "<td><button onClick='showcomments(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {
            })
    }
    
    
    
    function showcomments(id) {
        $("#main").hide();
        $("#commsnts").show();
        var url = "https://jsonplaceholder.typicode.com/posts/"+id+"/comments"
        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='comments'";
                    line += "<td>" + data.postId + "</td>"
                    line += "<td><b>" + data.id + "</b><br/>"
                    line += "<td><b>" + data.name + "</b><br/>"
                    line += "<td><b>" + data.email + "</b><br/>"
                    line += data.body + "</td>"
                    line += "</tr>";
                    $("#tblcomments").append(line);
             
            })
            .fail((xhr, err, status) => {
            })

          }



    $(() => {
        LoadPosts();
        $("#comments").hide();
        
            $("#main").show();
            $("#btnBack").click(() => {
            $("#main").show();
            $("#comments").remove();
        });
    })
  
</script>
</html>
