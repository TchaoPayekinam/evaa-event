<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reçu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            position: relative;
            /*width: 800px;
            height: 1131px;*/  /*Adjust according to your image size */
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .content {
            position: absolute;
            top: 200px; /* Adjust according to your template */
            left: 70px; /* Adjust according to your template */
            width: 700px; /* Adjust according to your template */
        }
        .info-ref {
            position: absolute;
            top: 148px;
            left: 422px;
        }
        .info-ref p, .info-date p, .info-clt p, .info-add p{
            font-size: 20px;
        }
        .info-date {
            position: absolute;
            top: 179px;
            left: 440px;
        }
        .info-clt {
            position: absolute;
            top: 212px;
            left: 450px;
        }
        .info-add {
            position: absolute;
            top: 248px;
            left: 470px;
        }
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .items-table th, .items-table td {
            border: 1px solid #000;
            padding: 5px;
        }
        .items-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <img src="{{ asset('event/assets/img/receipt_template.jpeg') }}" class="background" alt="Background">
    <div class="info-ref">
        <p>1 </p>
    </div>
    <div class="info-date">
        <p>23/07/2024 </p>
    </div>
    <div class="info-clt">
        <p>AJAVON Daniel </p>
    </div>
    <div class="info-add">
        <p>Lomé, TOGO </p>
    </div>
</body>
</html>
