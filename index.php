<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Allura&family=Audiowide&family=Cinzel+Decorative:wght@400;700;900&family=Eagle+Lake&family=Lugrasimo&family=Macondo+Swash+Caps&family=Ribeye&display=swap" rel="stylesheet">
<script src="https://unpkg.com/scrollreveal"></script>
    <title>EVENTA</title>
</head>
<body>
  <div id="project">
   <section class="logopage sections" id="sec01">
     <div class="banner">
        <div class="title">
     <svg xmlns="http://www.w3.org/2000/svg" version="1.0"  viewBox="0 0 884 1005" preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,1005.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
<path d="M1917 8578 c-3 -8 0 -33 6 -56 10 -36 9 -45 -6 -59 -14 -15 -25 -15 -88 -6 -51 8 -78 8 -95 1 -30 -14 -30 -19 2 -57 14 -17 23 -35 20 -40 -4 -5 -38 -21 -76 -36 -39 -15 -77 -36 -85 -48 -19 -28 -19 -74 1 -151 33 -129 82 -186 209 -239 38 -16 61 -32 64 -44 1 -10 30 -50 62 -90 66 -80 90 -128 87 -172 -1 -16 4 -40 11 -53 10 -21 5 -63 -38 -294 -49 -266 -84 -475 -97 -586 -3 -32 -11 -58 -16 -58 -13 0 -78 139 -85 183 -3 19 0 74 7 121 10 72 15 86 30 86 10 0 26 8 36 17 14 14 16 31 12 105 -3 49 -9 92 -13 96 -11 11 -93 -85 -100 -117 -4 -17 0 -44 9 -66 11 -27 14 -53 10 -91 -8 -62 -20 -78 -30 -37 -3 15 -10 44 -15 63 -13 53 -39 265 -39 317 0 36 5 49 25 65 31 24 33 76 6 149 -42 109 -79 117 -121 27 -47 -100 -38 -142 43 -184 24 -13 27 -20 27 -62 0 -42 18 -187 36 -297 9 -53 -5 -37 -39 43 -22 51 -25 67 -16 84 15 28 3 101 -22 132 -40 51 -69 23 -69 -66 0 -58 9 -74 53 -101 15 -10 27 -24 27 -32 0 -8 24 -62 54 -120 30 -57 60 -121 66 -142 16 -47 66 -148 92 -185 19 -27 19 -32 2 -220 -11 -132 -15 -250 -12 -373 l5 -180 -25 75 c-21 61 -25 95 -26 185 -1 93 -5 117 -23 156 -24 48 -58 89 -73 89 -21 0 -34 -49 -34 -132 1 -100 14 -129 69 -152 19 -8 35 -21 35 -28 0 -7 24 -96 54 -198 30 -102 66 -248 81 -325 31 -162 81 -368 131 -540 106 -363 224 -609 407 -849 75 -98 295 -326 316 -326 8 0 -44 60 -115 133 -196 200 -300 345 -410 572 -149 308 -209 683 -174 1082 l10 113 56 90 56 89 36 -19 c45 -25 75 -25 128 -1 96 44 154 157 162 319 5 116 2 120 -59 71 -21 -16 -89 -61 -151 -98 -68 -42 -122 -81 -135 -101 -27 -39 -30 -91 -7 -129 15 -25 14 -28 -30 -94 -45 -67 -46 -68 -46 -35 0 63 60 499 71 521 25 46 87 89 134 93 19 2 47 9 62 17 15 8 53 18 83 21 106 14 159 34 205 81 56 55 70 103 52 173 -12 50 -47 95 -89 116 -11 6 -26 29 -34 50 -7 22 -24 51 -38 64 -20 21 -33 25 -75 23 -33 -1 -60 4 -76 15 -17 11 -36 14 -56 10 -23 -4 -38 0 -56 14 -14 11 -40 20 -58 20 -24 0 -37 7 -49 25 -18 27 -54 33 -74 13 -7 -7 -12 -36 -12 -66 0 -52 -2 -56 -51 -102 l-52 -49 6 -54 c3 -30 16 -76 30 -103 13 -27 27 -73 30 -101 8 -67 34 -122 62 -133 32 -12 35 -67 13 -235 -56 -430 -77 -642 -79 -800 l-1 -70 -24 53 c-13 29 -40 99 -60 155 -33 93 -35 109 -31 182 5 76 46 274 67 323 5 12 16 22 25 22 29 0 48 59 42 129 -12 139 -44 167 -91 80 -38 -70 -47 -160 -19 -198 l21 -27 -31 -134 c-16 -74 -32 -142 -35 -150 -11 -30 -30 180 -31 340 -1 179 9 309 40 550 39 298 145 892 161 898 5 2 36 41 70 85 84 111 165 195 211 218 20 11 37 24 37 29 0 5 24 25 53 43 104 67 170 165 171 255 1 47 -3 56 -31 83 -18 16 -33 36 -33 44 0 8 18 26 40 40 38 24 59 62 46 84 -4 6 -27 19 -51 30 -24 10 -49 29 -55 41 -10 18 -17 21 -49 15 -28 -5 -54 0 -104 20 -46 19 -79 26 -104 23 -29 -4 -41 0 -54 16 -14 17 -33 21 -125 28 -60 4 -123 10 -140 13 -22 5 -33 3 -37 -7z m163 -25 c88 -3 108 -6 125 -23 l20 -20 -36 -36 -35 -35 -51 25 c-35 18 -67 26 -102 26 -28 0 -51 4 -51 9 0 5 -3 23 -7 41 -6 30 -4 33 13 25 10 -4 66 -10 124 -12z m286 -63 c26 -11 45 -22 43 -24 -2 -2 -40 -18 -83 -37 -155 -64 -282 -228 -274 -354 1 -30 0 -55 -3 -55 -3 0 -13 17 -22 38 -30 70 -39 125 -33 200 7 79 -3 92 -39 52 -15 -17 -19 -39 -21 -113 -1 -72 -9 -116 -34 -199 -32 -103 -48 -126 -67 -95 -4 6 -8 95 -8 197 -1 204 -8 240 -57 296 -42 47 -28 62 43 46 70 -17 92 -15 122 8 42 33 103 27 191 -20 41 -22 80 -40 86 -40 18 0 11 17 -10 23 -29 8 -25 20 20 61 47 42 76 45 146 16z m152 -41 c7 -11 33 -30 58 -41 58 -25 55 -41 -21 -92 -32 -23 -67 -55 -77 -72 -10 -16 -27 -75 -38 -129 -14 -70 -28 -112 -47 -139 -29 -41 -56 -58 -52 -35 6 45 -4 74 -35 105 -39 39 -56 43 -56 14 0 -25 -57 -116 -94 -150 -27 -24 -28 -25 -39 -5 -25 42 -39 92 -44 161 -5 67 -4 75 27 132 60 114 171 197 340 255 59 21 63 21 78 -4z m-723 -153 c12 -42 15 -92 13 -220 -3 -160 -4 -166 -23 -160 -39 11 -95 55 -119 92 -29 45 -66 161 -66 209 0 42 33 78 87 92 21 6 47 17 58 25 30 23 33 20 50 -38z m801 -124 c14 -52 -36 -157 -105 -219 -41 -38 -111 -73 -143 -73 -19 0 -16 5 19 38 60 55 73 86 103 244 6 31 20 69 32 83 l20 26 34 -38 c18 -21 37 -49 40 -61z m-893 -682 c35 -70 36 -150 1 -150 -10 0 -14 14 -14 50 0 28 -4 50 -10 50 -5 0 -10 -22 -10 -50 0 -27 -4 -50 -9 -50 -23 0 -61 43 -61 70 0 36 49 142 63 138 7 -2 24 -28 40 -58z m-68 -300 c8 -16 15 -42 15 -57 -1 -25 -2 -26 -14 -10 -20 26 -28 20 -20 -15 6 -29 5 -31 -10 -19 -22 18 -23 131 -1 131 8 0 21 -13 30 -30z m225 -104 c0 -59 -3 -75 -16 -80 -23 -9 -28 -1 -15 23 8 14 8 22 0 26 -6 4 -13 -2 -16 -14 -3 -12 -9 -21 -14 -21 -15 0 -21 47 -9 72 15 29 51 68 62 68 4 0 8 -33 8 -74z m296 -111 c10 -16 26 -25 43 -25 49 0 70 -12 87 -48 9 -21 32 -53 51 -73 l34 -36 -66 -32 c-36 -18 -92 -58 -126 -88 -33 -31 -61 -54 -63 -52 -7 8 -16 366 -9 372 13 14 33 6 49 -18z m230 -70 c10 -8 41 -15 68 -15 37 0 56 -6 73 -22 25 -23 31 -53 10 -45 -8 3 -43 -1 -78 -8 -58 -12 -66 -12 -84 3 -37 32 -42 37 -54 61 -11 19 -11 25 0 32 21 13 43 11 65 -6z m-296 -136 c0 -51 -4 -78 -10 -74 -6 3 -10 -5 -10 -19 0 -30 -9 -56 -20 -56 -4 0 -17 20 -29 45 -35 74 -24 142 26 169 15 8 31 15 36 16 4 0 7 -36 7 -81z m463 17 c12 -13 32 -26 45 -30 61 -20 40 -116 -44 -200 -50 -50 -74 -61 -178 -81 -49 -9 -112 -25 -140 -35 -27 -11 -54 -16 -58 -12 -13 13 -48 119 -48 145 0 31 79 111 156 157 46 28 192 77 237 79 4 1 18 -10 30 -23z m126 -139 c11 -37 10 -50 -4 -83 -23 -56 -71 -101 -127 -120 -74 -24 -92 -15 -38 21 25 17 52 44 60 60 9 17 28 48 43 70 14 22 29 55 33 73 8 40 18 34 33 -21z m-922 -421 c24 -46 44 -137 33 -155 -6 -12 -10 -6 -15 22 -11 59 -28 58 -20 -2 8 -56 -1 -65 -34 -32 -30 30 -39 171 -14 214 7 12 32 -12 50 -47z m272 -10 c14 -56 14 -121 1 -147 -17 -30 -30 -22 -30 17 0 21 -4 33 -10 29 -5 -3 -10 -19 -10 -36 0 -16 -4 -29 -10 -29 -14 0 -23 46 -17 90 6 46 45 132 57 125 4 -2 13 -25 19 -49z m471 -66 c0 -115 -38 -218 -104 -278 -62 -57 -130 -67 -171 -26 -13 14 -11 21 24 67 50 64 42 77 -10 18 -46 -51 -69 -50 -69 5 0 53 30 87 133 148 51 30 110 68 132 84 57 43 65 41 65 -18z m-472 -883 c13 -17 41 -310 28 -296 -13 13 -117 452 -115 489 0 8 17 -29 39 -83 21 -54 42 -103 48 -110z"/>
<path d="M3187 7683 c-19 -18 -1 -31 60 -42 36 -7 79 -19 94 -27 116 -59 172 -221 189 -539 12 -226 12 -2560 0 -2745 -16 -247 -50 -381 -116 -459 -45 -52 -103 -82 -174 -90 -41 -5 -56 -10 -58 -23 -3 -17 71 -18 1409 -20 l1412 -3 12 -43 c7 -23 20 -54 29 -67 21 -32 22 -157 2 -178 -26 -25 -278 -144 -418 -196 -167 -62 -368 -121 -523 -152 -63 -13 -115 -27 -115 -31 0 -13 26 -9 169 22 550 123 1011 353 1320 658 63 61 115 112 116 112 1 0 5 -13 8 -29 9 -42 39 -66 105 -83 31 -9 71 -21 89 -29 48 -20 83 -4 113 54 20 37 30 47 50 47 60 0 100 20 120 60 11 21 29 41 39 45 33 10 36 43 7 83 -25 35 -25 37 -7 57 35 38 53 86 47 120 -6 33 -64 95 -88 95 -7 0 -9 19 -4 58 5 48 2 65 -18 107 -29 61 -63 98 -83 91 -8 -4 -26 -9 -40 -12 -23 -6 -25 -5 -18 17 20 63 52 95 117 119 34 12 92 39 128 58 55 30 74 35 120 34 30 -1 62 2 70 8 13 8 12 12 -7 25 -13 9 -23 25 -23 35 0 37 -23 34 -60 -7 -50 -57 -280 -172 -280 -140 0 39 43 76 177 150 122 68 143 76 166 68 44 -17 122 15 111 44 -4 10 11 19 53 30 109 30 133 45 98 59 -8 3 -12 12 -9 20 10 25 -15 28 -51 6 -19 -12 -38 -32 -41 -45 -4 -16 -18 -28 -40 -35 -38 -13 -58 -6 -50 17 6 15 -32 103 -43 103 -16 0 -81 -63 -81 -79 0 -9 -20 -37 -45 -61 -25 -25 -57 -62 -72 -82 -25 -38 -79 -78 -102 -78 -7 0 9 40 36 91 49 93 147 205 188 214 124 26 199 35 257 30 68 -5 89 3 63 25 -11 9 -13 23 -9 51 5 30 3 39 -7 39 -20 0 -81 -38 -104 -65 -30 -34 -61 -41 -68 -14 -3 13 -10 18 -17 14 -21 -13 -58 15 -52 38 4 16 2 19 -11 14 -10 -4 -24 -10 -32 -13 -23 -9 -18 8 13 43 33 39 134 82 221 93 70 9 97 25 70 40 -9 6 -20 21 -23 35 -4 14 -10 25 -15 25 -15 0 -62 -42 -71 -64 -5 -13 -27 -28 -61 -40 -30 -10 -60 -21 -68 -24 -22 -8 2 29 59 91 32 35 61 57 80 61 17 3 42 17 55 30 26 27 34 58 13 55 -21 -3 -48 12 -48 27 0 8 -8 14 -18 14 -25 0 -55 -55 -49 -90 5 -20 1 -33 -15 -46 -24 -22 -130 -159 -147 -191 -21 -40 -34 -27 -28 26 8 69 30 108 66 116 45 10 54 26 35 64 -18 37 -23 38 -58 10 -17 -13 -26 -30 -26 -48 0 -15 -8 -43 -17 -62 -12 -23 -18 -59 -18 -109 -1 -68 -5 -82 -36 -135 -20 -33 -48 -82 -64 -109 -28 -49 -28 -49 -40 -25 -7 13 -20 57 -30 97 l-18 73 32 27 c35 31 47 79 19 74 -28 -4 -22 24 17 87 46 73 70 101 88 101 21 0 77 48 77 66 0 8 -7 14 -15 14 -8 0 -19 9 -25 20 -6 11 -17 17 -24 14 -9 -4 -16 2 -18 17 -5 34 -25 34 -42 0 -18 -34 -21 -87 -6 -96 18 -11 10 -33 -42 -114 -78 -119 -92 -112 -78 40 18 186 52 256 146 299 35 16 64 32 64 37 0 11 -59 73 -70 73 -4 0 -25 -33 -45 -72 -20 -40 -45 -87 -56 -104 -35 -57 -57 -172 -60 -310 -2 -71 1 -135 5 -142 4 -7 16 -49 27 -92 10 -44 26 -97 35 -117 l16 -38 -99 -192 c-54 -105 -101 -189 -105 -186 -12 7 -8 149 5 228 10 58 16 70 34 75 43 10 63 37 63 83 0 24 -6 52 -14 62 -13 18 -14 17 -21 -14 -7 -34 -10 -35 -79 -15 -16 5 -17 2 -11 -37 4 -24 11 -51 15 -59 4 -8 1 -53 -7 -100 -9 -57 -12 -120 -9 -191 4 -58 4 -108 0 -111 -3 -4 -34 11 -68 33 -38 23 -70 37 -79 33 -30 -11 -107 -132 -107 -167 0 -21 -42 -46 -99 -58 -60 -13 -99 -41 -117 -85 -21 -51 -17 -74 19 -108 26 -24 32 -36 26 -51 -30 -79 34 -215 102 -215 11 0 19 -3 19 -7 0 -14 -156 -169 -232 -230 -97 -79 -244 -177 -256 -169 -14 8 -2 56 13 56 8 0 37 21 66 48 47 44 52 52 57 101 2 30 -1 92 -8 138 -14 85 -13 92 17 193 5 20 -38 84 -60 88 -23 5 -109 -84 -132 -136 -10 -23 -22 -42 -27 -42 -4 0 -8 106 -8 235 0 129 -4 235 -9 235 -16 0 -28 -25 -34 -68 -6 -51 -45 -133 -84 -180 -86 -104 -280 -205 -506 -263 -97 -25 -330 -64 -459 -78 -165 -18 -512 -32 -775 -30 l-253 1 0 1062 0 1061 42 38 c76 66 130 87 227 87 75 0 96 -4 161 -33 41 -18 120 -60 175 -94 257 -155 424 -213 620 -213 118 0 181 13 271 55 130 62 228 191 241 319 6 53 4 58 -13 54 -13 -2 -21 -15 -25 -41 -13 -82 -116 -161 -231 -177 -69 -10 -191 2 -278 27 -30 8 -140 49 -244 90 -256 101 -320 117 -476 117 -103 1 -138 -3 -200 -22 -85 -27 -184 -79 -236 -124 l-34 -30 0 852 0 852 493 -5 c497 -5 643 -14 867 -52 297 -51 520 -138 631 -246 58 -56 80 -95 93 -161 4 -24 13 -38 22 -38 12 0 14 38 12 268 l-3 267 -1401 3 c-770 1 -1404 -1 -1407 -5z m4072 -2563 c1 -3 -15 -18 -36 -34 l-36 -29 29 52 c23 43 29 49 35 34 4 -10 8 -20 8 -23z m31 -177 c0 -27 -22 -42 -105 -72 -5 -2 12 20 40 48 27 28 53 51 57 51 4 0 8 -12 8 -27z m-494 -429 c24 -14 46 -30 50 -35 3 -5 -8 -26 -25 -46 -36 -45 -59 -106 -68 -181 l-6 -55 -24 29 c-35 42 -83 139 -83 166 1 36 75 147 98 148 7 0 33 -12 58 -26z m217 -36 c56 -76 56 -141 0 -187 -39 -32 -219 -105 -235 -95 -14 9 0 110 21 160 33 74 120 152 173 154 9 0 28 -15 41 -32z m-359 -184 c16 -30 44 -74 62 -98 l32 -43 -51 1 c-29 0 -84 -6 -123 -14 -60 -11 -76 -11 -103 0 -49 20 -66 51 -51 94 14 44 54 74 115 85 26 5 52 14 58 20 20 20 32 12 61 -45z m431 -42 c52 -36 67 -68 55 -113 -6 -20 -21 -45 -33 -57 l-24 -22 -65 30 c-36 17 -92 36 -124 43 -110 23 -110 34 4 77 48 18 98 41 112 51 31 23 28 24 75 -9z m-370 -118 c11 -3 28 -18 37 -34 18 -32 18 -32 -46 -65 -21 -11 -56 -43 -77 -72 -21 -28 -48 -54 -59 -58 -54 -17 -122 90 -104 163 9 36 11 37 64 44 30 4 73 11 95 16 49 12 65 13 90 6z m227 -35 c78 -27 150 -73 172 -110 16 -27 16 -28 -12 -49 -15 -11 -36 -36 -46 -54 -19 -36 -39 -46 -93 -46 -28 0 -33 3 -33 25 0 36 -37 127 -70 174 -59 81 -34 99 82 60z m-749 -51 c19 -25 19 -28 2 -78 -18 -53 -17 -65 4 -207 12 -82 0 -124 -51 -174 -58 -56 -71 -53 -63 19 4 31 13 85 21 120 16 74 18 100 5 87 -5 -6 -17 -46 -26 -90 -9 -44 -18 -81 -20 -84 -3 -2 -13 13 -22 35 -13 29 -18 64 -18 134 0 80 4 102 24 140 26 50 100 132 115 127 5 -2 18 -15 29 -29z m647 -19 c35 -49 70 -138 70 -180 0 -45 -26 -98 -54 -110 -21 -10 -34 -8 -73 8 -26 11 -65 24 -86 27 -74 14 -95 71 -58 160 18 41 80 96 109 96 5 0 17 9 27 20 25 28 31 26 65 -21z"/>
<path d="M7255 6920 c-7 -11 12 -50 24 -50 16 0 31 27 25 44 -7 18 -39 22 -49 6z"/>
<path d="M7527 6446 c-8 -20 22 -51 35 -38 14 14 5 46 -13 50 -9 2 -19 -4 -22 -12z"/>
<path d="M7484 6135 c-4 -9 0 -23 9 -32 21 -21 49 -9 45 19 -4 28 -45 38 -54 13z m36 -15 c0 -5 -2 -10 -4 -10 -3 0 -8 5 -11 10 -3 6 -1 10 4 10 6 0 11 -4 11 -10z"/>
<path d="M7255 5950 c-17 -19 -17 -22 -3 -36 22 -22 61 -2 56 29 -4 29 -30 33 -53 7z m31 -27 c-10 -10 -19 5 -10 18 6 11 8 11 12 0 2 -7 1 -15 -2 -18z"/>
<path d="M7427 5833 c-10 -10 -8 -43 2 -43 23 0 41 14 41 31 0 19 -29 27 -43 12z"/>
<path d="M7237 5644 c-4 -4 -7 -16 -7 -26 0 -15 6 -19 28 -16 19 2 27 9 27 23 0 20 -33 33 -48 19z"/>
<path d="M2696 4261 c-10 -16 5 -42 23 -39 21 4 21 42 -1 46 -9 2 -19 -1 -22 -7z"/>
<path d="M3048 4118 c-8 -21 2 -38 24 -38 14 0 19 6 16 22 -3 25 -33 36 -40 16z"/>
<path d="M2844 3995 c-9 -23 3 -45 26 -45 25 0 37 25 20 45 -16 19 -39 19 -46 0z m31 -15 c3 -5 1 -10 -4 -10 -6 0 -11 5 -11 10 0 6 2 10 4 10 3 0 8 -4 11 -10z"/>
<path d="M2867 3694 c-14 -15 -6 -43 14 -49 23 -8 41 9 36 35 -2 16 -38 26 -50 14z"/>
<path d="M3167 3596 c-3 -8 2 -21 12 -30 23 -21 53 -10 49 18 -4 25 -52 36 -61 12z"/>
<path d="M5387 3353 c-24 -23 12 -55 38 -33 12 10 13 16 4 26 -12 15 -31 18 -42 7z"/>
<path d="M3432 3322 c-17 -11 -5 -39 19 -45 25 -7 36 17 19 38 -14 17 -20 18 -38 7z"/>
<path d="M3980 3304 c-11 -12 -10 -18 3 -31 9 -9 20 -13 24 -9 4 4 1 12 -7 17 -11 8 -12 12 -2 16 14 5 17 23 3 23 -5 0 -14 -7 -21 -16z"/>
<path d="M3132 3288 c7 -21 36 -34 49 -21 6 6 8 16 5 22 -10 15 -59 14 -54 -1z"/>
<path d="M3633 3224 c-9 -25 26 -49 44 -31 8 7 11 21 7 30 -8 22 -43 22 -51 1z"/>
<path d="M4707 3148 c-19 -10 -21 -17 -8 -37 12 -18 51 -4 51 19 0 22 -21 31 -43 18z"/>
<path d="M4247 3113 c-23 -23 6 -59 38 -47 18 7 18 9 5 35 -11 19 -31 25 -43 12z"/>
<path d="M4854 3095 c-4 -9 -2 -21 4 -27 16 -16 47 -5 47 17 0 26 -42 34 -51 10z m31 -5 c3 -5 1 -10 -4 -10 -6 0 -11 5 -11 10 0 6 2 10 4 10 3 0 8 -4 11 -10z"/>
<path d="M5230 3005 c-16 -19 -6 -45 17 -45 13 0 14 3 5 12 -8 8 -8 15 -1 24 6 7 6 14 1 18 -6 3 -15 -1 -22 -9z"/>
<path d="M4448 2938 c-8 -21 2 -38 22 -38 25 0 35 17 20 35 -15 18 -36 19 -42 3z"/>
<path d="M7348 2881 c-9 -27 -12 -53 -8 -58 22 -26 123 -326 130 -388 5 -51 8 -59 9 -30 2 36 9 24 65 -120 35 -88 67 -179 71 -203 9 -53 -11 -87 -58 -101 -24 -7 4 -9 108 -9 77 0 133 2 125 5 -27 10 -52 37 -75 84 -23 44 -79 188 -251 644 -45 121 -87 221 -91 222 -5 2 -16 -19 -25 -46z"/>
<path d="M1427 2905 c53 -23 57 -54 57 -465 1 -388 -3 -424 -47 -455 -20 -14 -16 -15 53 -15 l75 0 -2 471 -3 472 173 -5 c148 -5 181 -9 237 -29 48 -18 70 -33 87 -58 l23 -34 0 67 0 66 -342 0 c-302 -1 -339 -2 -311 -15z"/>
<path d="M2476 2901 c55 -34 48 -17 266 -596 66 -176 125 -329 131 -339 9 -18 12 -14 29 28 l18 48 -46 121 c-65 171 -149 393 -195 516 -26 68 -39 120 -39 152 0 53 8 62 77 78 28 7 -2 9 -117 10 l-155 1 31 -19z"/>
<path d="M3090 2909 c51 -14 80 -51 80 -103 0 -45 -39 -171 -116 -378 -24 -65 -44 -122 -44 -126 1 -18 26 43 110 267 99 264 125 315 173 336 29 13 21 14 -103 14 -104 -1 -127 -3 -100 -10z"/>
<path d="M3716 2906 c20 -9 35 -25 43 -46 7 -23 11 -156 11 -417 0 -405 -3 -436 -47 -462 -14 -8 -1 -10 57 -11 l75 0 -2 470 -3 470 133 0 c200 -1 328 -29 360 -80 20 -33 27 -23 27 35 l0 55 -342 0 c-298 -1 -339 -3 -312 -14z"/>
<path d="M4785 2900 c31 -12 45 -33 54 -81 l9 -44 1 38 c1 20 4 37 9 37 4 0 61 -82 126 -183 66 -100 201 -306 300 -456 l181 -275 5 455 c4 409 7 458 22 481 10 15 28 29 40 31 13 2 -33 5 -102 5 -113 1 -122 0 -94 -12 40 -18 72 -63 97 -139 18 -54 21 -95 25 -322 2 -143 2 -276 0 -295 -3 -38 -24 -8 -417 592 l-116 178 -80 -1 c-52 0 -73 -3 -60 -9z"/>
<path d="M5951 2848 c0 -46 3 -57 9 -42 20 50 138 98 230 92 l51 -3 -1 -415 c0 -458 -3 -484 -54 -506 -28 -12 -18 -13 94 -12 69 0 115 3 104 5 -12 2 -30 13 -40 25 -18 19 -19 48 -22 464 l-3 444 48 0 c96 0 211 -42 232 -84 8 -17 10 -10 10 37 l1 57 -330 0 -330 0 1 -62z"/>
<path d="M7221 2549 c-6 -18 -11 -37 -10 -43 0 -6 7 7 15 28 8 22 12 41 10 43 -2 2 -9 -10 -15 -28z"/>
<path d="M7390 2556 c0 -27 -44 -68 -139 -130 -179 -117 -241 -194 -241 -301 0 -61 41 -135 89 -159 46 -24 136 -20 196 8 83 38 155 141 169 241 6 39 5 39 -8 -7 -22 -75 -69 -150 -115 -183 -37 -26 -52 -30 -106 -30 -54 0 -67 4 -90 25 -40 37 -55 73 -55 132 0 101 51 172 190 270 36 25 75 56 87 69 21 23 42 79 29 79 -3 0 -6 -6 -6 -14z"/>
<path d="M1613 2530 c-31 -13 -29 -22 2 -14 28 7 72 -8 127 -44 76 -49 157 -50 208 -2 39 36 39 57 1 29 -36 -26 -74 -22 -168 16 -64 25 -129 31 -170 15z"/>
<path d="M3903 2530 c-31 -13 -29 -17 7 -12 21 3 48 -6 92 -31 76 -42 135 -59 177 -51 35 7 91 54 91 76 -1 8 -6 6 -15 -6 -22 -29 -95 -26 -177 7 -68 27 -133 34 -175 17z"/>
<path d="M7228 2483 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/>
<path d="M7473 2300 c0 -25 2 -35 4 -22 2 12 2 32 0 45 -2 12 -4 2 -4 -23z"/>
<path d="M2986 2244 c-9 -26 -14 -49 -12 -51 2 -2 11 17 20 43 9 26 14 49 12 51 -2 2 -11 -17 -20 -43z"/>
<path d="M4852 2198 c-3 -159 -23 -218 -77 -231 -11 -2 39 -5 110 -5 95 -1 123 2 105 9 -72 29 -118 128 -133 289 -2 19 -5 -9 -5 -62z"/>
<path d="M2956 2165 c-9 -26 -7 -32 5 -12 6 10 9 21 6 23 -2 3 -7 -2 -11 -11z"/>
<path d="M2065 2090 c-16 -51 -114 -95 -240 -109 -59 -7 -44 -9 93 -10 l162 -1 0 70 c0 72 -4 85 -15 50z"/>
<path d="M4355 2090 c-17 -53 -117 -97 -250 -110 -54 -5 -31 -7 98 -9 l167 -1 0 70 c0 72 -4 85 -15 50z"/>
</g>
</svg>

        </div>
        <p class="focus-in">
         WHERE EVERY EVENT BEGINS TO BLOOM</p>
     </div>
   </section>
<!--hero section-->
<section class="herosec sections" id="sec02">
  <div class="container">
   
  <h2 class="logoname">EVENTA</h2>
   <div class="innerbox">
     <div class="navbar">
      <nav>
        <ul class="nav-menu">
          <li><a href="#sec02"class="active">Home</a></li>
          <li><a href="#sec03"class="active">Services</a></li>
          <li><a href="#sec04"class="active">Events</a></li></li>
          <li><a href="#sec05"class="active">Gallery</a></li></li>
          <li><a href="#sec06"class="active">Review</a></li></li>
          <li><a href="#sec07"class="active">Contact</a></li></li>
        </ul>
      </nav>
      <button class="nav-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>
     </div>

    
  

<div class="hero-wrap">
  <div class="content-wrap">
    <div class="content">
       <h2>Where  Celebration Covered 
      <span>
        <span class="text">Weddings</span>
        <span class="text">Birthdays</span>
        <span class="text"> Meetings</span>
        <span class="text">Seminars</span>
        <span class="text">Culutural Programs</span>
      </span>
      </h2>
      <p class="subline">
        Making every event smoother, and more memorable.
      </p><br><br>
      <div class="signlogin">
       <!--<button class="sign-up"><a href="./Registration/signup.html" class="signpage">Sign In!</a></button>-->
       <?php if (!isset($_SESSION['user_email'])): ?>
         <a href="./registration/signup.html" class="sign-up signpage">
             Sign In!
         </a>
       <?php else: ?>
         <a href="/Eventa/php/logout.php" class="sign-up signpage">
          Logout!
         </a>

       <?php endif; ?>
      </div>
    </div>
  </div>
</div>

   </div>
  </div>
</section>

<!--services section-->
<section class="spotlight sections" id="sec03" data-colors="#f3cfdf">
<div class="spotlight-header">
<h1>Every detail perfectly in place</h1>
</div>
<div class="spotlight-images">
 <div class="spotlight-img"><img class="imag" src="./assets/Venue.jpeg" alt=""></div>
 <div class="spotlight-img"><img class="imag" src="./assets/Catering.jpeg" alt=""></div>
 <div class="spotlight-img"><img class="imag" src="./assets/Entertainment.jpeg" alt=""></div>
 <div class="spotlight-img"><img class="imag" src="./assets/Photography.jpeg" alt=""></div>
</div>

</section>

<!--events section-->
<section class="cards sections"  id="sec04" data-colors="#000000">
  <div class="card">
    <div class="card-marquee">
      <div class="marquee">
        <h2 class="paralal">pure joy</h2>
        <h2 class="paralal">celebrate love</h2>
        <h2 class="paralal">share ideas</h2>
        <h2 class="paralal">creative expression</h2>
      </div>
    </div>
    <div class="card-wrap">
     <div class="card-content">
       <div class="card-title">
         <h2 class="title-data">Moments of laughter, and celebration</h2>
       </div>
       <div class="card-book">
        
          <button class="cssbuttons-io-button">
            <a href="Budget-Book/budget.html" class="book-option">
               Book Now
               <div class="icon">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                   <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/>
                  </svg>
               </div>
            </a>
          </button>

        </div>
     </div>
     <div class="card-img">
       <img src="./assets/bday.jpeg" alt="" class="event-img">
     </div>
    </div>
  </div>
 <!--2nd img-->
  <div class="card">
    <div class="card-wrap">
     <div class="card-content">
       <div class="card-title">
         <h2 class="title-data">Celebrating love and togetherness</h2>
       </div>
       <div class="card-book">
        <button class="cssbuttons-io-button">
            <a href="Budget-Book/budget.html" class="book-option">
               Book Now
               <div class="icon">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                   <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/>
                  </svg>
               </div>
            </a>
          </button>

       </div>
     </div>
     <div class="card-img">
       <img src="./assets/wedding.jpeg" alt="" class="event-img">
     </div>
    </div>
  </div>
 <!--3rd img-->
  <div class="card">
    <div class="card-wrap">
     <div class="card-content">
       <div class="card-title">
         <h2 class="title-data">Focused on collaboration and success</h2>
       </div>
       <div class="card-book">
         <button class="cssbuttons-io-button">
            <a href="Budget-Book/budget.html" class="book-option">
               Book Now
               <div class="icon">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                   <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/>
                  </svg>
               </div>
            </a>
          </button>

       </div>
     </div>
     <div class="card-img">
       <img src="./assets/meeting.jpeg" alt="" class="event-img">
     </div>
    </div>
  </div>
 <!--4th img-->
  <div class="card">
    <div class="card-wrap">
     <div class="card-content">
       <div class="card-title">
         <h2 class="title-data">Expressing traditions through creativity</h2>
       </div>
       <div class="card-book">
         <button class="cssbuttons-io-button">
            <a href="Budget-Book/budget.html" class="book-option">
               Book Now
               <div class="icon">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                   <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/>
                  </svg>
               </div>
            </a>
          </button>

       </div>
     </div>
     <div class="card-img">
       <img src="./assets/programs.jpeg" alt="" class="event-img">
     </div>
    </div>
  </div>
</section>

<!--gallery section-->

<section class="gallery sections" id="sec05">
   <div class="gallery-header">
      <div class="g-heading"><h1>Moments we've Crafted &#128151
      </h1></div><br><br>
      <div class="filter-option">
          <ul>
            <li  data-filter="all">All</li>
            <li  data-filter="wed">Wedding</li>
            <li  data-filter="bday">Birthday</li>
            <li  data-filter="meet">Meeting</li>
            <li  data-filter="cul">Cultural</li>
            <li  data-filter="other">Others</li>
          </ul>

      </div>
   </div>

   <div class="gallery-container all">
     <div class="gall-box bday"><img  src="./assets/b2.jpeg" alt=""></div>
     <div class="gall-box cul"><img  src="./assets/c4.jpeg" alt=""></div>
     <div class="gall-box meet"><img  src="./assets/m4.jpeg" alt=""></div>
     <div class="gall-box wed"><img  src="./assets/w4.jpeg" alt=""></div>
     <div class="gall-box other"><img  src="./assets/o3.jpeg" alt=""></div>
     <div class="gall-box bday"><img  src="./assets/b3.jpeg" alt=""></div>
     <div class="gall-box cul"><img  src="./assets/c2.jpeg" alt=""></div>
     <div class="gall-box meet"><img  src="./assets/m2.jpeg" alt=""></div>
     <div class="gall-box wed"><img  src="./assets/w1.jpeg" alt=""></div>
     <div class="gall-box other"><img  src="./assets/o2.jpeg" alt=""></div>
     <div class="gall-box bday"><img  src="./assets/b4.jpeg" alt=""></div>
     <div class="gall-box cul"><img  src="./assets/c1.jpeg" alt=""></div>
     <div class="gall-box meet"><img  src="./assets/m1.jpeg" alt=""></div>
     <div class="gall-box wed"><img  src="./assets/w5.jpeg" alt=""></div>
     <div class="gall-box wed"><img  src="./assets/w7.jpeg" alt=""></div>
     <div class="gall-box bday"><img  src="./assets/b5.jpeg" alt=""></div>
     <div class="gall-box cul"><img  src="./assets/c3.jpeg" alt=""></div>
     <div class="gall-box meet"><img  src="./assets/m5.jpeg" alt=""></div>
     <div class="gall-box wed"><img  src="./assets/w2.jpeg" alt=""></div>
     <div class="gall-box other"><img  src="./assets/o1.jpeg" alt=""></div>
     <div class="gall-box bday"><img  src="./assets/b1.jpeg" alt=""></div>
     <div class="gall-box cul"><img  src="./assets/c6.jpeg" alt=""></div>
     <div class="gall-box meet"><img  src="./assets/m3.jpeg" alt=""></div>
     <div class="gall-box wed"><img  src="./assets/w3.jpeg" alt=""></div>
     <div class="gall-box other"><img  src="./assets/o4.jpeg" alt=""></div>
     <div class="gall-box bday"><img  src="./assets/b6.jpeg" alt=""></div>
     <div class="gall-box cul"><img  src="./assets/c5.jpeg" alt=""></div>
     <div class="gall-box wed"><img  src="./assets/w6.jpeg" alt=""></div>

   </div>
</section>


<!--review section-->
<section class="review sections" id="sec06" data-colors="#DDAED3">
 <div class="review-header">
  <h1>Feedback & Reviews</h1>
 </div>
 <button id="openReviewBtn" class="review-btn">
  + Share Your Experience 
</button>
 
<div class="review-carousel">
  <div class="review-track" id="reviewTrack">
  </div>
 </div>

 <div class="input-review">

<div class="review-modal" id="reviewModal">
  <div class="modal-content">

    <span class="close-btn" id="closeModal">&times</span>
   <div class="review-head">
    <h2>We Value  Your Review</h2>
    <p>let us know your thoughts to help us improve</p>
   </div>

   <!--review form-->
    <form  action="" id="reviewForm">
     <div class="input-grp">
      <input type="text" name="text" autocomplete="off" id="name" placeholder="Your Name" required>
       
    </div>
      

      <!-- Stars -->
       <h3>Rate your Experience</h3>
      <div class="stars">
        <span data-value="1">⭐</span>
        <span data-value="2">⭐</span>
        <span data-value="3">⭐</span>
        <span data-value="4">⭐</span>
        <span data-value="5">⭐</span>
      </div><br>
      <div class="input-grp">
       <textarea id="message" placeholder="Write your review..." rows="3" required></textarea>
      </div>
      <div class="input-grp">
       <button type="submit" class="review-submit">Submit</button>
      </div>
    </form>
  </div>
  
</div>

 </div>
 
</section>

<!--contact section-->

<section class="contact-page sections" id="sec07" data-colors="#AACDDC">
  <div class="contact-box">
    <div class="left-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3737.8937640216755!2d85.84785350881815!3d20.469556106675014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a190dabde0166cd%3A0x50746dd358f9e541!2sAjay%20Binay%20Institute%20of%20Technology%20(ABIT)!5e0!3m2!1sen!2sin!4v1775117056197!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  
    <div class="contact-form">
       <h2>Contact Us &#128172</h2>

       <!--contact form-->
        <form action="https://api.web3forms.com/submit" method="POST" class="contactForm">
          <div class="inputGroup iG">
             <input type="hidden" name="access_key" value="6befb9e2-0050-47f4-aef0-0f6d7b62be6d">

            <input required="" type="name" name="text" autocomplete="off" class="contacti" placeholder="Your Name" required>
            <input required="" type="email" name="email" autocomplete="off" class="contacti" placeholder="Your Email" required>
             <textarea  id="contactMessage" name="message" placeholder="Write your Message ..." rows="5" required></textarea>
          </div>
          <div class="input-Group">
            <button type="submit" class="contact-submit" >Submit</button>
          </div>

        </form>

        <div class="popup" id="popup">
               <div class="tick">&#9989</div>
               <h3>Thank You!</h3>
               <p>Your details has been successfully submitted . Thanks!</p>
               <button type="button" id="closeModdal">OK</button>

            </div>

    </div>
  </div>

</section>

<!--footer section-->
<footer class="footerContainer"> 
 <div class="social-login-icons">
  <a href="https://x.com/eventaa_3">
  <div class="socialcontainer">
    <div class="icon social-icon-1-1">
      <svg
        viewBox="0 0 512 512"
        height="1.7em"
        xmlns="http://www.w3.org/2000/svg"
        class="svgIcontwit"
        fill="white"
      >
        <path
          d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
        ></path>
      </svg>
    </div>
    <div class="social-icon-1">
      <svg
        viewBox="0 0 512 512"
        height="1.7em"
        xmlns="http://www.w3.org/2000/svg"
        class="svgIcontwit"
        fill="white"
      >
        <path
          d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
        ></path>
      </svg>
    </div>
  </a>
  </div>
  <div class="socialcontainer">
    <a href="https://www.instagram.com/eventa_3?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
    <div class="icon social-icon-2-2">
      <svg
        fill="white"
        class="svgIcon"
        viewBox="0 0 448 512"
        height="1.5em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
        ></path>
      </svg>
    </div>
    <div class="social-icon-2">
      <svg
        fill="white"
        class="svgIcon"
        viewBox="0 0 448 512"
        height="1.5em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
        ></path>
      </svg>
    </div>
    </a>
  </div>
  <div class="socialcontainer">
    <a href="https://www.facebook.com/share/1BLTWs4Bpm/">
    <div class="icon social-icon-3-3">
      <svg
        viewBox="0 0 384 512"
        fill="white"
        height="1.6em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"
        ></path>
      </svg>
    </div>
    <div class="social-icon-3">
      <svg
        viewBox="0 0 384 512"
        fill="white"
        height="1.6em"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"
        ></path>
      </svg>
    </div>
    </a>
  </div>
  <div class="socialcontainer">
    <a href="">
    <div class="icon social-icon-4-4">
      <svg version=1 fill="white" viewBox="0 0 100 100" height="1.6em">
        <path
          d="M20 80A12 12 0 0 1 8 68v-40A12 12 0 0 1 20 16h56A12 12 0 0 1 88 28v40A12 12 0 0 1 76 80zm10.5 -47.12a4 4 0 1 0 -5.001 6.24l15.001 12.004a12 12 0 0 0 15.001 0l15.001 -12a4 4 0 1 0 -5.001 -6.247l-15.001 12a4 4 0 0 1 -5.001 0z"
        ></path>
      </svg>
    </div>
    <div class="social-icon-4">
      <svg fill="white" viewBox="0 0 100 100" height="1.6em">
        <path
          d="M20 80A12 12 0 0 1 8 68v-40A12 12 0 0 1 20 16h56A12 12 0 0 1 88 28v40A12 12 0 0 1 76 80zm10.5 -47.12a4 4 0 1 0 -5.001 6.24l15.001 12.004a12 12 0 0 0 15.001 0l15.001 -12a4 4 0 1 0 -5.001 -6.247l-15.001 12a4 4 0 0 1 -5.001 0z"
        ></path>
      </svg>
    </div>
  </div>
</a>
</div>
 
<div class="footerNav">
       <ul>
          <li><a href="#sec02">Home</a></li>
          <li><a href="#sec03">Services</a></li>
          <li><a href="#sec04">Events</a></li></li>
          <li><a href="#sec05">Gallery</a></li></li>
          <li><a href="#sec06">Review</a></li></li>
          <li><a href="#sec07">Contact</a></li></li>
        </ul>
</div>
<div class="footerBottom">
<p>Copyright &copy ; 2026 <span class="flogo">EVENTA</span>.All rights reserved. </p>

</div>


</footer>




  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/gsap@3.14.2/dist/SplitText.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/SplitText.min.js" integrity="sha512-wOeEC+9qERAzhliwBFPDb6t8TiFFxdxG8vhK/Ygs7TuC44bpg8pg/X2/U/u+0X4fK05wb9id1EIipnF02+CFQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/lenis@1.3.18/dist/lenis.min.js"></script> 

<!--<script type="module" src="./marquee.js"></script>-->
<script type="module" src="./script.js"></script>

</body>
</html>