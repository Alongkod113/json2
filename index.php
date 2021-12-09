<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<style>
    .bg1 {
        background-color: red;
    }

    .bg2 {
        background-color: green;
    }

    .bg3 {
        background-color: blue;
        width: 200px;
        height: 1270px;
        float: left;
    }

    .bg4 {
        background-color: darkkhaki;
        text-align: center;
        width: 80%
    }
</style>

<body>
    <div class="container">
        <img src="https://s3-ap-southeast-1.amazonaws.com/media.storylog/storycontent/5ad57030f0abf15642a597b5/15268670418467142123.jpg"
            class="img-fluid" alt="..." width="80%">
        <div class="container">
            <div class="col-12 bg3">[Float:left]</div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://sites.google.com/site/planetinworld2558/_/rsrc/1445078020159/home/daw-phuth-mercury/%E0%B8%9E%E0%B8%B8%E0%B8%98.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">ดาวพุธเป็นดาวเคราะห์ที่อยู่ใกล้ดวงอาทิตย์มากที่สุด
                            และเป็นดาวเคราะห์ที่เล็กที่สุดในระบบสุริยะ ใช้เวลาโคจรรอบดวงอาทิตย์ 87.969 วัน</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://sites.google.com/site/gatetouni/_/rsrc/1473238042961/solarsystem/earth/solar41.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">เป็นดาวเคราะห์ลำดับที่สามจากดวงอาทิตย์
                            และเป็นวัตถุทางดาราศาสตร์เพียงหนึ่งเดียวที่ทราบว่ามีสิ่งมีชีวิต
                            จากการวัดอายุด้วยกัมมันตรังสีและแหล่งหลักฐานอื่นได้ความว่าโลกกำเนิดเมื่อประมาณ 4,500 ล้านปี
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <button id="btnBack"> back </button>

                <div id="main">
                    <table  class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody id="tblPost">
                        </tbody>
                    </table>
                </div>

                <div id="detail">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>UserID</th>
                            </tr>
                        </thead>
                        <tbody id="tblDetails">
                        </tbody>
                    </table>
                </div>
