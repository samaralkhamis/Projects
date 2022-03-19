<!DOCTYPE html>
<!-- saved from url=(0052)https://filerequestpro.com/up/study-plan-upload-page -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta Information -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, follow">

    <title>File Request Pro</title>

    <!-- Fonts -->
    <link href="./File Request Pro_files/css" rel="stylesheet" type="text/css">
    <script src="./File Request Pro_files/dropzone.js.download"></script>
    <link rel="stylesheet" href="./File Request Pro_files/dropzone.css">


    <style>
        :root {
            --pageBGColor: rgba(237,244,245,1);   /* Page Background color */
            --pageTextColor: rgba(9,9,9,1);   /* Page Background color */
            --dropzoneBGColor: transparent;   /* Page Background color */
            --dropzoneBorderColor: #0087F7;   /* Page Background color */
            --dropzoneTextColor: #737373;   /* Page Background color */
            --primaryControlBGColor: #0297f8;   /* Button Back Color */
            --primaryControlFGColor: #fff;   /* Page Background color */
            --formBorderColor: #ddd;   /* Page Background color */
            --primaryControlHoverColor: #0287e8;
            --errorColor: #d70022;
            --linkColor: #0094fb;
            --successControlBGColor: #05a700;
            --successControlFGColor: #fff
        }
        
        
        html {
            background: var(--pageBGColor)
        }
        
        body {
            font-family: 'Open Sans';
            display: flex;
            flex-direction: column;
            margin: 0;
            height: 100vh;
            color: var(--pageTextColor);

        }


        .frp-form {
            border: 2px dashed var(--dropzoneBorderColor);
            border-radius: 5px;
            background: var(--dropzoneBGColor);
            margin: 30px auto;
             
             
            max-width: 700px;
            overflow: auto;
            padding: 10px;
                    }

        .dropzone {
            border: none;
            border-radius: 5px;
            background: transparent;
            margin: 0px 0px 20px auto;
              max-width: 700px;
            max-height: 500px;
            overflow: auto;
                    }


        .dropzone .dz-message {
            text-align: center;
            font-size: 1em;
            font-weight: 200;
            display: block;
            font-family: 'Open Sans Condensed', arial, sans;
            color: var(--dropzoneTextColor);
        }

        .dropzone .dz-preview.dz-image-preview {
            background: transparent;
        }

        .full-height {
            min-height: 100%;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
        }

        .flex-fill {
            flex: 1;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }


        .text-center {
            text-align: center;
        }

        .logo {
            padding: 1em;
            text-align: left;
            padding-left: 4em;
        }

        .logo h1 {
            font-size: 1.5em;
        }

        .links button {
            background-color: #3097D1;
            border: 0;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;
            padding: 15px;
            text-transform: uppercase;
            width: 100px;
        }

        .footer {
            right: 0;
            bottom: 0;
            left: 0;
            font-size: 13px;
            align-items: flex-end;
            justify-content: space-between;
            padding: 50px 31px 41px;
            width: 100%;
            box-sizing: border-box;
        }


        .honeypot {
            position: absolute;
            width: 0;
            height: 0;
            margin: 0;
            padding: 0;
            border: 0;

        }

        .btn {

            min-width: 240px;
            height: 60px;

             display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 10px;

            font-size: 15px;
            font-weight: 500;
            color: var(--primaryControlFGColor);
            cursor: pointer;
            background: var(--primaryControlBGColor);
            border: 1px solid var(--primaryControlBGColor);
            border-radius: 5px;
        }


        .form-style-8 {
            font-family: 'Open Sans Condensed', arial, sans;

             
                width: 500px;
             
            padding: 30px;
            margin: 10px auto;

        }

        .form-style-8 input[type="text"],
        .form-style-8 input[type="name"],
        .form-style-8 input[type="date"],
        .form-style-8 input[type="datetime"],
        .form-style-8 input[type="email"],
        .form-style-8 input[type="number"],
        .form-style-8 input[type="search"],
        .form-style-8 input[type="time"],
        .form-style-8 input[type="url"],
        .form-style-8 input[type="checkbox"],
        .form-style-8 input[type="password"],
        .form-style-8 input[type="phone"],
        .form-style-8 textarea,
        .form-style-8 select {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            display: block;
            width: 100%;
            padding: 7px;
            border: none;
            border-bottom: 1px solid var(--formBorderColor);
            background: transparent;
            margin-bottom: 3%;
            font: 16px Arial, Helvetica, sans-serif;
            height: 40px;
        }

        .form-style-8 label{
            color: var(--dropzoneTextColor);
        }

        .form-style-8 textarea {
            resize: vertical;
            overflow: auto;
            height: 100px;
        }

        /** notifications **/
        h1 {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 1.5em;
            line-height: 1.5em;
            letter-spacing: -0.05em;
            margin-bottom: 20px;
            padding: .1em 0;
            color: #444;
            position: relative;
            overflow: hidden;
            white-space: nowrap;
            text-align: center;
        }

        h1:before,
        h1:after {
            content: "";
            position: relative;
            display: inline-block;
            width: 50%;
            height: 1px;
            vertical-align: middle;
            background: #f0f0f0;
        }

        h1:before {
            left: -.5em;
            margin: 0 0 0 -50%;
        }

        h1:after {
            left: .5em;
            margin: 0 -50% 0 0;
        }

        h1>span {
            display: inline-block;
            vertical-align: middle;
            white-space: normal;
        }

        .notify {
            display: block;
            background: #fff;
            padding: 12px 18px;
            max-width: 400px;
            margin: 0 auto;
            cursor: pointer;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            margin-bottom: 20px;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 2px 0px;
        }

        .notify h1 {
            margin-bottom: 6px;
        }

        .successbox {
            display: none;
        }

        .errorbox {
            display: none;
        }

        .successbox h1 {
            color: #77bf81;
        }

        .errorbox h1 {
            color: #c92121;
        }

        .successbox h1:before,
        .successbox h1:after {
            background: #cad8a9;
        }

        .errorbox h1:before,
        .errorbox h1:after {
            background: #d6b8b7;
        }

        .notify .alerticon {
            display: block;
            text-align: center;
            margin-bottom: 10px;
        }

        .err {
            border-bottom: 1px solid #c92121 !important;
            color: #c92121;
            box-shadow: none;
            border-bottom: 1px solid #c92121 !important;

        }

        input.err::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color: #c92121;
        }

        input.err:-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: #c92121;
            opacity: 1;
        }

        input.err::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: #c92121;
            opacity: 1;
        }

        input.err:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #c92121;
        }

        input.err::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #c92121;
        }

        input.err::placeholder {
            /* Most modern browsers support this now. */
            color: #c92121;
        }
        


        h2 {
            text-align: center;
        }


        /* Portrait and Landscape */
        @media  screen and (max-width:320px) {
            .logo {
                padding-left: 1em;
            }


        }

        /* Portrait and Landscape */
        @media  screen and (max-width:480px) {
            .form-style-8 {
                width: 100%;

            }

            body {
                padding-left: 2%;
                padding-right: 2%;
            }

            #uploadform,
            .flex-center {
                text-align: center;
            }
        }

        

    </style>
</head>

<body>
    <div class="full-height flex-column">

                <div class="logo">
                            <svg style="height: 35px;" viewBox="0 0 607 90" preserveAspectRatio="xMidYMid meet" id="dhgbghfa">
                    <defs id="SvgjsDefs1001"></defs>
                    <g id="SvgjsG1007" featurekey="root" fill="#ffffff"></g>
                    <g id="SvgjsG1008" featurekey="symbol1" fill="#0078d7" transform="matrix(0.30340975522994995,0,0,0.30340975522994995,-15.00361266391343,-22.842661480526846)">
                        <title xmlns="http://www.w3.org/2000/svg">Artboard 1 copy 22</title>
                        <g xmlns="http://www.w3.org/2000/svg" data-name="Immersive experience ">
                            <path d="M305.45,282.26h-143V98.47h87.17v55.82h55.82v16h10v-23L256.7,88.47H152.46V292.26h163V272.38h-10Zm-45.82-138V105.54l38.75,38.75Z"></path>
                            <polygon points="330.98 187.78 323.91 194.85 346.77 217.71 323.91 240.57 330.98 247.64 360.91 217.71 330.98 187.78"></polygon>
                            <polygon points="330.91 217.71 300.98 187.78 293.91 194.85 316.77 217.71 293.91 240.57 300.98 247.64 330.91 217.71"></polygon>
                            <polygon points="270.98 247.64 300.91 217.71 270.98 187.78 263.91 194.85 286.77 217.71 263.91 240.57 270.98 247.64"></polygon>
                            <rect x="49.45" y="97.47" width="89.33" height="6"></rect>
                            <rect x="69.45" y="127.47" width="69.33" height="6"></rect>
                            <rect x="79.45" y="157.47" width="59.33" height="6"></rect>
                            <rect x="89.45" y="187.47" width="49.33" height="6"></rect>
                            <rect x="49.45" y="277.47" width="89.33" height="6"></rect>
                            <rect x="69.45" y="247.47" width="69.33" height="6"></rect>
                            <rect x="79.45" y="217.47" width="59.33" height="6"></rect>
                        </g>
                    </g>
                    <g id="SvgjsG1009" featurekey="text1" fill="#0078d7" transform="matrix(3.3944144248962402,0,0,3.3944144248962402,114.02718167168536,-23.009566472285655)">
                        <path d="M10.635 10.019375 l0 2.2266 l-6.6016 0 l0 3.5156 l6.2695 0 l0 2.3145 l-6.2988 0 l0 5.9082 l-2.5391 0 l0 -13.965 l9.1699 0 z M15.1757875 10.019375 l0 2.0508 l-2.5879 0 l0 -2.0508 l2.5879 0 z M15.1757875 13.730375 l0 10.254 l-2.5879 0 l0 -10.254 l2.5879 0 z M20.205084375 10.019375 l0 13.965 l-2.5879 0 l0 -13.965 l2.5879 0 z M26.97268125 13.730375 q4.66796875 0 4.66796875 4.765625 q0 0.634765625 -0.087890625 1.26953125 l-6.8066 0 q0 2.16796875 3.18359375 2.16796875 q1.552734375 0 3.10546875 -0.29296875 l0 2.0508 q-1.357421875 0.29296875 -3.30078125 0.29296875 q-5.576171875 0 -5.576171875 -5.244140625 q0 -5.009765625 4.814453125 -5.009765625 z M24.74608125 17.968775 l4.375 0 l0 -0.078125 q0 -2.12890625 -2.1484375 -2.12890625 q-2.05078125 0 -2.2265625 2.20703125 z  M38.2226125 23.964844 l0 -13.945 l6.3477 0 q4.27734375 0 4.27734375 3.740234375 q0 2.529296875 -3.330078125 4.189453125 l4.4238 6.0352 l-3.2617 0 l-4.248 -6.084 l0 -1.1816 q3.7109375 -0.634765625 3.7109375 -2.880859375 q0 -1.54296875 -1.73828125 -1.54296875 l-3.5449 0 l0 11.67 l-2.6367 0 z M55.244165625 13.730375 q4.66796875 0 4.66796875 4.765625 q0 0.634765625 -0.087890625 1.26953125 l-6.8066 0 q0 2.16796875 3.18359375 2.16796875 q1.552734375 0 3.10546875 -0.29296875 l0 2.0508 q-1.357421875 0.29296875 -3.30078125 0.29296875 q-5.576171875 0 -5.576171875 -5.244140625 q0 -5.009765625 4.814453125 -5.009765625 z M53.017565625 17.968775 l4.375 0 l0 -0.078125 q0 -2.12890625 -2.1484375 -2.12890625 q-2.05078125 0 -2.2265625 2.20703125 z M68.417965625 16.054675 q-0.927734375 -0.234375 -1.708984375 -0.234375 q-2.783203125 0 -2.783203125 2.958984375 q0 3.056640625 2.412109375 3.056640625 q1.2109375 0 2.080078125 -0.52734375 l0 -5.2539 z M71.005765625 27.695275 l-2.5879 0 l0 -4.1992 q-1.0546875 0.48828125 -2.3828125 0.48828125 q-4.66796875 0 -4.66796875 -5.185546875 q0 -5.068359375 5.322265625 -5.068359375 q1.982421875 0 4.31640625 0.419921875 l0 13.545 z M82.6755625 13.730375 l0 10.254 l-2.0215 0 l-0.3125 -1.3086 q-1.767578125 1.30859375 -3.75 1.30859375 q-3.14453125 0 -3.14453125 -3.720703125 l0 -6.5332 l2.5879 0 l0 6.4648 q0 1.69921875 1.484375 1.69921875 q1.259765625 0 2.568359375 -1.005859375 l0 -7.1582 l2.5879 0 z M89.443384375 13.730375 q4.66796875 0 4.66796875 4.765625 q0 0.634765625 -0.087890625 1.26953125 l-6.8066 0 q0 2.16796875 3.18359375 2.16796875 q1.552734375 0 3.10546875 -0.29296875 l0 2.0508 q-1.357421875 0.29296875 -3.30078125 0.29296875 q-5.576171875 0 -5.576171875 -5.244140625 q0 -5.009765625 4.814453125 -5.009765625 z M87.216784375 17.968775 l4.375 0 l0 -0.078125 q0 -2.12890625 -2.1484375 -2.12890625 q-2.05078125 0 -2.2265625 2.20703125 z M96.054684375 23.496095 l0 -2.1484 q1.708984375 0.68359375 3.9453125 0.68359375 q1.669921875 0 1.669921875 -1.07421875 q0 -1.025390625 -1.123046875 -1.025390625 l-1.8555 0 q-3.125 0 -3.125 -3.076171875 q0 -3.22265625 4.560546875 -3.22265625 q1.93359375 0 3.642578125 0.5859375 l0 2.1484 q-1.708984375 -0.68359375 -3.7109375 -0.68359375 q-2.099609375 0 -2.099609375 1.07421875 q0 1.025390625 1.220703125 1.025390625 l1.6602 0 q3.41796875 0 3.41796875 3.076171875 q0 3.22265625 -4.35546875 3.22265625 q-2.138671875 0 -3.84765625 -0.5859375 z M105.91795 12.070375 l1.9141 0 l0.39063 1.6602 l2.5781 0 l0 2.0508 l-2.2949 0 l0 4.7168 q0 1.435546875 1.240234375 1.435546875 l1.0547 0 l0 2.0508 l-2.3047 0 q-2.578125 0 -2.578125 -2.763671875 l0 -9.1504 z  M117.197221875 23.984375 l0 -13.965 l6.25 0 q4.27734375 0 4.27734375 3.935546875 q0 4.267578125 -5.849609375 5.166015625 l-0.37109 -2.3047 q3.515625 -0.634765625 3.515625 -2.783203125 q0 -1.73828125 -1.73828125 -1.73828125 l-3.4961 0 l0 11.689 l-2.5879 0 z M129.18945 23.984375 l0 -10.254 l2.002 0 l0.32227 1.3086 q1.34765625 -1.30859375 2.8515625 -1.30859375 l0 2.0898 q-1.4453125 0 -2.587890625 1.201171875 l0 6.9629 l-2.5879 0 z M140.419875 22.031275 q2.490234375 0 2.490234375 -3.212890625 q0 -3.134765625 -2.490234375 -3.134765625 t-2.4902 3.1348 q0 3.212890625 2.490234375 3.212890625 z M135.341795 18.857375 q0 -5.15625 5.078125 -5.15625 t5.0781 5.1563 q0 5.146484375 -5.078125 5.146484375 q-5.05859375 0 -5.078125 -5.146484375 z"></path>
                    </g>
                </svg>
                    </div>



        <div class="header">
                        <h2>Study Plan Upload Page</h2>
                    </div>
        
        <div id="successbox" class="notify successbox">
            <h1>Success!</h1>
            <span class="alerticon"><svg style="color:#77bf81; height: 45px;" aria-hidden="true" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                </svg></span>
            <p>Thanks so much. Your files have been successfully uploaded.</p>
        </div>

        <div id="errorbox" class="notify errorbox">
            <h1>Warning!</h1>
            <span class="alerticon"><svg style="color:#c92121; height: 45px;" aria-hidden="true" data-prefix="fas" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                </svg></span>
            <p>There was an error with your request. Please contact support.</p>
        </div>

        <div id="uploadform">
                        <div class="flex-center">
                                <p style="width: 80%; text-align:center;">Upload your study plan here</p>
                            </div>
                        <div class="flex-fill flex-center">
                <div id="dropzone" class="frp-form">
                    <form id="frp" enctype="multipart/form-data" action="https://filerequestpro.com/upload">
                        <input type="hidden" name="_token" value="kA8TUGFmHBL8XRBMCY7haFVV5d1Q5rGwpOyNHwb3">                        <input id="upload_session" type="hidden" name="upload_session" value="b27ef584-d37d-44cd-bfe5-446a505f798b">
                        <input type="hidden" value="946" name="user_id">
                        <input type="hidden" value="935" name="page_id">
                        <div class="form-style-8">
                            
                        </div>

                        
      
                        <input type="text" value="" autocomplete="none" name="comment" class="honeypot">
                        <div class="dropzone needsclick dz-clickable" id="dropzone-form">
                            <div class="dz-message needsclick">
                                <svg width="37" height="37" viewBox="0 0 57 57" xmlns="http://www.w3.org/2000/svg">
                                    <g transform="translate(1 1)" stroke-width="2" stroke="var(--dropzoneTextColor)" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 24l10-9 10 9M28 39.545V15"></path>
                                        <circle cx="27.5" cy="27.5" r="27.5"></circle>
                                    </g>
                                </svg>
                                <br><br>
                                                                    Drop files here or click to upload.
                                                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="flex-fill flex-center">
                <button class="btn" onclick="processForm();" type="button"> 
                                            Send Files
											
                                    </button>
            </div>
        </div>
                    <div class="footer"></div>
            </div>



<script src="./File Request Pro_files/bundle.min.js.download" integrity="sha384-/Cqa/8kaWn7emdqIBLk3AkFMAHBk0LObErtMhO+hr52CntkaurEnihPmqYj3uJho" crossorigin="anonymous"></script>
<script type="text/javascript">


    Dropzone.autoDiscover = false;

    var element = document.getElementById('dropzone-form');
    var myDropzone = new Dropzone(element, {
        url: "/upload",
        autoProcessQueue: false,
        maxFilesize: 1024,
        parallelUploads: 2,
        chunking: true,
        forceChunking: true,
        chunkSize: 90000000,
        timeout: 0,
        parallelChunkUploads: false,
        retryChunks: true,
        retryChunksLimit: 2,
        addRemoveLinks: true,
        chunksUploaded: function(file, done) {


            var data = '';

            data = '_token=' + document.getElementsByName('_token')[0].value;
            data = data + '&upload_session=' + document.getElementsByName('upload_session')[0].value;
            data = data + '&filename=' + file.upload.filename;
            data = data + '&totalchunks=' + file.upload.totalChunkCount;
            data = data + '&uuid=' + file.upload.uuid;
            data = data + '&page_id=' + document.getElementsByName('page_id')[0].value;
            data = data + '&user_id=' + document.getElementsByName('user_id')[0].value;

            if (document.getElementsByName('form_name')[0] !== undefined) {
                data = data + '&form_name=' + document.getElementsByName('form_name')[0].value;
            }

            if (document.getElementsByName('form_email')[0] !== undefined) {
                data = data + '&form_email=' + document.getElementsByName('form_email')[0].value;
            }

            if (document.getElementsByName('form_message')[0] !== undefined) {
                data = data + '&form_message=' + document.getElementsByName('form_message')[0].value;
            }


            var request = new XMLHttpRequest();
            request.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var response = JSON.parse(this.responseText);

                    if (myDropzone.getUploadingFiles().length === 0 && myDropzone.getQueuedFiles().length === 0) {
                        if (response.success == true) {
                            var elem = document.getElementById('successbox');
                            elem.style.display = 'block';

                            var uploadform = document.getElementById('uploadform');
                            uploadform.style.display = 'none';
                        } else {
                            var elem = document.getElementById('errorbox');
                            elem.style.display = 'block';

                            var uploadform = document.getElementById('uploadform');
                            uploadform.style.display = 'none';
                        }
                    }



                } else if (this.readyState == 4 && this.status != 200) {
                    console.log(JSON.parse(this.responseText));
                    console.log(this.status);

                    var elem = document.getElementById('errorbox');
                    elem.style.display = 'block';

                    var uploadform = document.getElementById('uploadform');
                    uploadform.style.display = 'none';
                }
            };
            request.open('POST', '/upload-complete', true);
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            request.send(data);


            done();
        },
        init: function() {
            this.on("completemultiple", function(file) {
                if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                    submitButton.removeAttribute("disabled");
                }
            });

            this.on('sending', function (data, xhr, formData) {
                formData.append("_token", document.getElementsByName('_token')[0].value);
                formData.append("upload_session", document.getElementsByName('upload_session')[0].value);
                formData.append("page_id", document.getElementsByName('page_id')[0].value);
                formData.append("user_id", document.getElementsByName('user_id')[0].value);
            });

        }, 

    });

    myDropzone.on("queuecomplete", function() {
        myDropzone.options.autoProcessQueue = false;

        var data = '';
        data = '_token=' + document.getElementsByName('_token')[0].value;
        data = data + '&upload_session=' + document.getElementsByName('upload_session')[0].value;
        data = data + '&page_id=' + document.getElementsByName('page_id')[0].value;
        data = data + '&user_id=' + document.getElementsByName('user_id')[0].value;
        data = data + '&form_data=' + serializeForm(); 


        var request = new XMLHttpRequest();
        request.open('POST', '/process-uploads', true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        request.send(data);

    });

    function processForm() {

        var elements = document.getElementById("frp").elements;
        var obj ={};
        for(var i = 0 ; i < elements.length ; i++){
            var item = elements.item(i);
            if(item.checkValidity() == false){
                item.reportValidity();
                item.classList.add('err');
                return false;
            }
        }

        if (document.getElementsByName('comment')[0].value != '' && document.getElementsByName('comment')[0].value != document.getElementsByName('form_email')[0].value) {
            return false;
        }

        myDropzone.options.autoProcessQueue = true;
        myDropzone.processQueue();
    }

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    function serializeForm(){
        var elements = document.getElementById("frp").elements;
        var obj ={};
        for(var i = 0 ; i < elements.length ; i++){
            var item = elements.item(i);
            obj[item.name] = item.value;
        }

        return JSON.stringify(obj)

    }
</script><input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"></body></html>