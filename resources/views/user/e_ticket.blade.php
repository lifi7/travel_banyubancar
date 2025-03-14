<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Ticket</title>
    <style>
        body {
            background-color: black;
            font-family: "Montserrat", "Helvetica Neue", "Open Sans", "Arial";
            font-weight: 300;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 20px;
        }

        .ticket {
            border-radius: 4px;
            display: inline-block;
            max-width: 320px;
            text-align: left;
            text-transform: uppercase;
            width: 100%;
            margin: 10px;
        }

        .ticket.dark {
            background-color: #161616;
            color: white;
        }

        .ticket.light {
            background-color: white;
            color: #161616;
            border: 1px solid #161616;
        }

        .ticket-head {
            background-image: url('assets/img/cta-bg.jpg');
            background-position: center;
            background-size: cover;
            border-radius: 4px 4px 0 0;
            color: white;
            height: 140px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 600;
        }

        /* .ticket-body {
            padding: 15px 20px;
            border-bottom: 1px dashed white;
        } */
        .ticket-body {
            padding: 15px 20px;
            border-bottom: 1px dashed black;
            position: relative;
        }

        .ticket-body::before,
        .ticket-body::after {
            content: "";
            width: 20px;
            height: 20px;
            background-color: black;
            border-radius: 50%;
            position: absolute;
            bottom: -10px;
        }

        .ticket-body::before {
            left: -10px;
        }

        .ticket-body::after {
            right: -10px;
        }

        .flight-info {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .barcode {
            height: 30px;
            width: 100px;
            background: repeating-linear-gradient(90deg, black 0, black 2px, white 2px, white 4px);
            margin-top: 15px;
        }

        .footer {
            padding: 15px 20px;
            font-size: 12px;
            font-style: italic;
            color: #A2A2A2;
        }

        .button-group {
            display: flex;
            gap: 15px;
            /* Memberi jarak antar tombol */
            margin-top: 20px;
        }

        .back-button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background: none;
            color: blue;
            border: 1px solid blue;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background: blue;
            color: white;
        }

        .ticket-button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #E64A19;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .ticket-button:hover {
            background-color: gray;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="ticket light">
                <div class="ticket-head">AMS ✈ JFK</div>
                <div class="ticket-body">
                    <div class="passenger">
                        <p>Passenger</p>
                        <h4>Michelle Doe</h4>
                    </div>
                    <div class="flight-info">
                        <div>
                            <p>Flight</p>
                            <h4>NY341</h4>
                        </div>
                        <div>
                            <p>Seat</p>
                            <h4>14A</h4>
                        </div>
                    </div>
                    <p class="flight-date">Jun-28-2017 at 08:30 AM</p>
                    <div class="barcode"></div>
                </div>
                <div class="footer">Disclaimer: Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
            </div>
        </div>
        <div class="button-group">
            <button class="back-button" onclick="goBack()">&#8592;</button> <!-- Unicode untuk panah kiri -->
            <button class="ticket-button" onclick="downloadImage()">Download Ticket</button>
        </div>
    </div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    function downloadImage() {
        let ticket = document.querySelector(".ticket"); // Ambil elemen tiket

        html2canvas(ticket, {
            scale: 3
        }).then(canvas => {
            let imgURL = canvas.toDataURL("image/png"); // Konversi ke PNG
            let a = document.createElement("a"); // Buat elemen <a>
            a.href = imgURL;
            a.download = "ticket.png"; // Nama file
            document.body.appendChild(a);
            a.click(); // Klik otomatis untuk download
            document.body.removeChild(a);
        });
    }
</script>

</html>
