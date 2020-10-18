<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Movie Recommender</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:300,500&amp;display=swap'>
    <style>
        html {
            box-sizing: border-box;
        }
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        
        body {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-size: 140%;
            background-image: url('../static/images/bgimg.jpg');
            line-height: 1.5;
            color: #000;
        }
        
        .footer {
            color: #e4e0e0;
            text-align: right;
            position: fixed;
            bottom: 30px;
            right: 20px;
            width: 100%;
            font-size: 120%;
        }
        
        #movie_name {
            width: 70%;
            padding: 1em;
            border-radius: 5px;
            text-align: center;
            border: 2px solid grey;
        }
        
        #submission_button {
            width: 25%;
            padding: 1em;
            margin: 1em;
            border-radius: 5px;
            color: white;
            background-color: red;
            border-style: none;
        }
    </style>
</head>

<body style="margin-top: 250px;">
    <div>
        <center>
            <h1 style="color: white;text-shadow: 0 0 20px #fffb00;">Movie Recommender System</h1>
            <b><form action="{{ url_for('main') }}" method="POST">
            <input type="text" id="movie_name" name="movie_name" placeholder="Enter a full movie name" required />
            <input type="submit" id="submission_button" value="ENTER" style="background-color:  #ffbf00; text-align: center;border-color:black;width:120px; color: black; font-weight: bolder; border-width: 2px;"/>
        </form></b>
            <br>
            <div style="color: white;">
                <h4>[Please Enter the Movie Names in LOWER CASE]</h4>
            </div>
        </center>
    </div>

    <div class="footer">Made with<span style="font-size:150%;color:red; "> &hearts; </span>by Team 16</div>

</body>

</html>
