@extends('layout.master')

@section('title', 'Book')

@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<script src="./main.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 


<section>
    <section>
        <div class=" border border-green-400 m-10 p-10">
            <form action="">
            <div class="px-80">
                    <h2 class=" font-bold text-red-500" >Please fill in your personal info</h2>
                    <div class="">
                            <hr class="mb-3">

                            <div class=""><label for="fname">First Name:</label>
                            <input class="ml-10  mb-3 w-48" type="text" name="fname" required></div>

                            <div ><label for="lname">Last Name:</label>
                            <input class=" ml-10 mb-3 w-48" type="text" name="lname" required></div>
                            

                            <div class=""><label for="email">Email:</label>
                            <input class=" ml-20 mb-3 w-48" type="email" name="email" required></div>

                            <div><label for="phone">Phone Number:</label>
                            <input class="ml-13 mb-3 w-48" type="text" name="phone" required></div>
                            
                            <div>
                            <label for="address">Address:</label>
                            <select name="address" id="address" class=" w-48 ml-14 mb-3">
                                <option value=""></option>
                                <option value="kd">Kandal</option>
                                <option value="pp">Phnom Penh</option>
                                <option value="sr">Seam Reap</option>
                            </select>
                            </div>
                    </div>
            </div>                
            </form>
        </div>
    </section>

    <section class=" bg-green-100">
        <div class="p-10">
            <div>
                <h3 class="font-bold text-red-500 pb-5">Hotel</h3>
            </div>
            
            <div class="flex items-center justify-between  border border-green-400 p-3">
                <div class="flex items-center">
                    <div class="relative">
                    
                        <ul id="slide">
                            <li class="relative">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypT7BD8u7r1hWam20dzxVEQQLF4CUiBd2UA&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                            <li class="relative hidden">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6N2QAQi9NW1umx3KKQNvIEn0Z4sH98y-elQ&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                            <li class="relative hidden">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypT7BD8u7r1hWam20dzxVEQQLF4CUiBd2UA&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                        </ul>
                    
                        <div class="absolute p-2 flex  w-full h-full left-0 top-0">
                            <div class="my-auto w-full flex justify-between" >
                                <button onclick="prev()" class="bg-white rounded-full p-2 bg-opacity-80 shadow-lg">
                                <span class="material-symbols-outlined">chevron_left</span>
                                </button>
                                <button onclick="next()" class="bg-white rounded-full p-2 bg-opacity-80 shadow-lg">
                                <span class="material-symbols-outlined">chevron_right</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="px-10 ">
                        <h3>Simple Hotel</h3>
                        <h3>Price $15/day</h3>
                        <h2>Rate </h2>
                        <h2>single bed and bathroom</h2>
                    </div>   
                </div>
                <div>
                    <button class="bg-green-300 py-1 px-2">Reserve</button>
                </div>
                
            </div>
            <div class="flex items-center justify-between  border border-green-400 p-3">
                <div class="flex items-center">
                    <div class="relative">
                    
                        <ul id="slide">
                            <li class="relative">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypT7BD8u7r1hWam20dzxVEQQLF4CUiBd2UA&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                            <li class="relative hidden">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6N2QAQi9NW1umx3KKQNvIEn0Z4sH98y-elQ&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                            <li class="relative hidden">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypT7BD8u7r1hWam20dzxVEQQLF4CUiBd2UA&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                        </ul>
                    
                        <div class="absolute p-2 flex  w-full h-full left-0 top-0">
                            <div class="my-auto w-full flex justify-between" >
                                <button onclick="prev()" class="bg-white rounded-full p-2 bg-opacity-80 shadow-lg">
                                <span class="material-symbols-outlined">chevron_left</span>
                                </button>
                                <button onclick="next()" class="bg-white rounded-full p-2 bg-opacity-80 shadow-lg">
                                <span class="material-symbols-outlined">chevron_right</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="px-10 ">
                        <h3>Simple Hotel</h3>
                        <h3>Price $15/day</h3>
                        <h2>Rate </h2>
                        <h2>single bed and bathroom</h2>
                    </div>   
                </div>
                <div>
                    <button class="bg-green-300 py-1 px-2">Reserve</button>
                </div>
                
            </div>
            <div class="flex items-center justify-between  border border-green-400 p-3">
                <div class="flex items-center">
                    <div class="relative">
                    
                        <ul id="slide">
                            <li class="relative">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypT7BD8u7r1hWam20dzxVEQQLF4CUiBd2UA&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                            <li class="relative hidden">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6N2QAQi9NW1umx3KKQNvIEn0Z4sH98y-elQ&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                            <li class="relative hidden">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypT7BD8u7r1hWam20dzxVEQQLF4CUiBd2UA&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                        </ul>
                    
                        <div class="absolute p-2 flex  w-full h-full left-0 top-0">
                            <div class="my-auto w-full flex justify-between" >
                                <button onclick="prev()" class="bg-white rounded-full p-2 bg-opacity-80 shadow-lg">
                                <span class="material-symbols-outlined">chevron_left</span>
                                </button>
                                <button onclick="next()" class="bg-white rounded-full p-2 bg-opacity-80 shadow-lg">
                                <span class="material-symbols-outlined">chevron_right</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="px-10 ">
                        <h3>Simple Hotel</h3>
                        <h3>Price $15/day</h3>
                        <h2>Rate </h2>
                        <h2>single bed and bathroom</h2>
                    </div>   
                </div>
                <div>
                    <button class="bg-green-300 py-1 px-2">Reserve</button>
                </div>
                
            </div>
            <div class="flex items-center justify-between  border border-green-400 p-3">
                <div class="flex items-center">
                    <div class="relative">
                    
                        <ul id="slide">
                            <li class="relative">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypT7BD8u7r1hWam20dzxVEQQLF4CUiBd2UA&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                            <li class="relative hidden">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6N2QAQi9NW1umx3KKQNvIEn0Z4sH98y-elQ&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                            <li class="relative hidden">
                                <img class=" object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypT7BD8u7r1hWam20dzxVEQQLF4CUiBd2UA&usqp=CAU" alt="">
                                <div class="absolute bg-green-400 top-0 left-0">
                                    <h2 class=" px-5 text-black-300 bg-green-400 ">Simple Hotel</h2>
                                </div>
                            </li>
                        </ul>
                    
                        <div class="absolute p-2 flex  w-full h-full left-0 top-0">
                            <div class="my-auto w-full flex justify-between" >
                                <button onclick="prev()" class="bg-white rounded-full p-2 bg-opacity-80 shadow-lg">
                                <span class="material-symbols-outlined">chevron_left</span>
                                </button>
                                <button onclick="next()" class="bg-white rounded-full p-2 bg-opacity-80 shadow-lg">
                                <span class="material-symbols-outlined">chevron_right</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="px-10 ">
                        <h3>Simple Hotel</h3>
                        <h3>Price $15/day</h3>
                        <h2>Rate </h2>
                        <h2>single bed and bathroom</h2>
                    </div>   
                </div>
                <div>
                    <button class="bg-green-300 py-1 px-2">Reserve</button>
                </div>
                
            </div>
        </div>
    </section>

    <section class="border border-green-400 m-10">
        <script>
        var TransportObject = {
        "Car": {
            "car1": ["front","back"],
            "car2": ["front","back"],
            "car3": ["front","back"]  
        },
        "Bus": {
            "bus1": ["front","middle","back"],
            "bus2": ["front","middle","back"]
        },
        "Flight": {
            "flight1": ["window","normal","aisle"],
            "flight2": ["window","normal","aisle"]
        }
        }
        window.onload = function() {
        var transportSel = document.getElementById("transport");
        var stopSel = document.getElementById("stop");
        var seatSel = document.getElementById("seat");
        for (var x in TransportObject) {
            transportSel.options[transportSel.options.length] = new Option(x, x);
        }
        transportSel.onchange = function() {
            //empty Chapters- and Topics- dropdowns
            seatSel.length = 1;
            stopSel.length = 1;
            //display correct values
            for (var y in TransportObject[this.value]) {
                stopSel.options[stopSel.options.length] = new Option(y, y);
            }
        }
        stopSel.onchange = function() {
            //empty Chapters dropdown
            seatSel.length = 1;
            //display correct values
            var z = TransportObject[transportSel.value][this.value];
            for (var i = 0; i < z.length; i++) {
                seatSel.options[seatSel.options.length] = new Option(z[i], z[i]);
            }
        }
        }
        </script>  
            <div class="p-10 ">
                <h1 class="font-bold text-red-500 pb-5">Transportation</h1>
                <div class="flex justify-between"> 
                    <img src="data:image/jpeg;base64,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" alt="">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFRQXGBcYHBkcGhoaGiIdHRwaHRwiGRoaIR0dIiwjGh0pIBkaJDYkKS0yMzMzGSI4PjgyPSwyMy8BCwsLDw4PHRISHjIpIikyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyLzIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMv/AABEIALcBFAMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAECBwj/xABGEAACAQIEAwUFBQUGBQMFAAABAhEAAwQSITEFQVEGEyJhcTKBkaGxI0JSwdEUYnLh8AczgpKy0iRTc6LxFRY0Q2OTo8L/xAAYAQADAQEAAAAAAAAAAAAAAAAAAQIDBP/EACURAAICAgICAgIDAQAAAAAAAAABAhEhMQMSQVETgSJhMkJxI//aAAwDAQACEQMRAD8A8nFbipcRhXt+2unUaj48vfUYFQBuzeZGDIxVhzH9ajyqxcP4yH8LQj9Dojeh+43ltVdy1yVoAuyYgEwZVuh/rWiTVRwnEioCXJdBsfvr6HmP3T8qsqW2UxmkClZSClqQGokPpUmtFoKO2eBNcLiT0+ddAVx3PSgAhL4YRzrduhxaNTg0AdWd6mIoey+tSXLyqJYgDqTA+dHkCQiuc4G+wpHxDtEi6W4c9Tov6mlDcWv3Z7sMY37pSco5ksJZR76YFsx3E1QSzBek7n0Uan12qr8R48zSLcqOv3j8PZHkNfPlTLhHYLHYl/FbNpZGdrntANIzZJzNqpBG80/b+ztrUBftLqpndWI/dEoOYzd4BOpyDrSapWJso2A4TcuFSwKo0w0bgbwDv/W9WTIloobXgCrB/ExgS0n7xI5QNtKY4HDqblpEHiOZNjqcoaPI+Dbz91ae3lvWnKardeU/EEZmzHlHhif3fSuZzlLeidg7NA+0DeJJQsIBLeJWlTtBzZj0E6UAttu7uW3U51yNDeHeWAO0+HXlvpW+IXme4RMgMQANVUjKNCN/YAnyG9E4Dh7ut8ySUCMQm+pKgRGslgIHWeVPF0iWLUCq4AJmdViNABsS7SxObTb4wDFE3O7b2lzZwCDDD6jwk+7zqwJ2WNy0C2W0SYDka+KRlJWS5gnbTQDdtK6nBb9oh7yOiZo2gsAY00kDeDHntu3FpWFjt8Th2togtsGCoHYQS5zKzHX2BCkb/e2ABBhscQ7pi6Am4VdVgRlD76+/oI67yFfxVsA7wAYnQgzEeEkfnM1mCs37z93YsFsyjcToI8Uz4dbikz10iNErY7O72Ne8qowEqIDAQxBPMnViSfdrQeEKyNYClTm6ajUadJOnNaOudlsU1zusiz3i2ySTlV2Q3QCQDHgAY/xqBqasHFf7PcQQO7dP7sZlAyjOqHTcyWYAST989KtcbeRC/AWrNy411lAklM5YuQt22VDKoIJgTCDUSdTyvPB8HbxIs3GRVWytxFRQypDjLIQ+zKkz0KxO8E9nuzKWMOlu6FuXFXuy4HtItxnt+hXNIO4686sCWwJgRJk+vOtox9lCfgvZnDYQ5rVsB8oQtzIESfKcoJjc03S2BMCJJJ9TqTUtZWiwScRXJFdmspoRDlrK7isqrF1Pmu3iww8QA+B+VDX+Go2ts5T0+78OXuqJMJcZsi+NssjKZ0AkjXaPyqP9qIgrp11JBPv/ACrmX6NrBr1hk9oR57j41FTtcVp4xoTE7qfKagvcPVtUMeXL+VOxf4KnFXZj429TVNvWiujCPz9KujJLN6n60MqJJbopKgRKJQUqKJ0jpUyW0O4odakV6WQClwtvofjU64C3zBHq0fWKC/amiAYHlpPqedRG4aMhgB7IqL+MNu8c1vJcOUMU1DoB401BhiBrBJA5irGOE8Ka7ab9lulGVyxuXHZVXMVW4W7xoAZGXWBBnlSH+xnxcQuyJ+wu7+dy0PpPxr03jHAbbZi9oXEy5UAUTbgELplMqCZBAJEeydTWlOjMVYXszgbLqP2WywIIzFASUaAHlhKujEI22jhjEQOuOW1w+S1ZYzdW6FtrAkd3KrBOihlYgACM0Ur/APc1m1h2tX7dwMZa2WyglcmUEELqIGUSDKnKeYrG48720F1Q1y1IFzxIAxX7O4yuszzyzJJiDFKTXkVlt7Q41beGhbgDMoygwzMDAmGMsdd9fMGvNbuKa5czXSWOZB4pzZYLD/tWQJitYnjly8EV9O6RVWDtCgSRm11AO3IVzibgKrLuMrSSQD4crDrtDn41zT5O0v0KyTimMbL3iwHe4XSIz2ySCfZ0ggk7RLGNdg8TedbduGOYGfFr90rqdyAMwihcZczKFn2mUAdFA09NOXuqLiLlnIzRz3nfr6/H1pNjDez+Fz27odlLCHRRlzOzuAVHMgKsx115mb7gsKLFu7cSz3YFklWDEu+XWcsQjdDJmdelUHB32e+mUKjeKcikHKJzAidDlBgDTQVZeJ4prKd4ly5dXEBEKPtbnVrY2EGCI+fM78SVORmyw8OsfYWrgvXIZLYUHLCADVgBIzEAy0kCh8di1vmXEWVMAc2aCAone6+wUewp1IYjLXrHaFLlu1hrrd0iqC/dnUIuvdg7EtpryUtuSK1j+KYXEBiXuWbdvKLaD2yFU+I+M5QCwMAcmJLEjLr2jWAGOKGCW41vGIGuhQ5hGyou4VMgmABq3kdQPCFTY39lcGzmS2xBkO2VgDOYFlLH7w205zTvAYNGSW7y62Uqi3ILW7bQ0NcGmUgjQ69BMipe0PC7WVGe53ZQDKSpKLEBVHUCDoNTJPopQbVqgTGnCO1Vu6GXKtoz4O8uABmOw8QDTmzLIVh4DrtJfZ7il689wv3RthiFCyHTUwHBJkkDXRY0IzKZHmfF3t27zpctZLTwVVbahiUaIJbx2judDqGXQAgi8dk+FWnyYhbjki1aTMQVbMjMWIJ3Q5oyGRoNNqlSd0Wi7RWRW61WhRqsrKymSZWVlVztDdJYAEwARp13Og35fCgBpe4rYQlWvIpHLMNKyqhbTTf5R8qygZ4XlLSILe6fKuKmW2+XMJyiAWGwJ11PM1FdYTEjSsUhnWYxE+6jsOYEzr0HIVFgblsZhcBIYaMsFlI2Ik7TuOlaZMo8mpoDniDlgvkfyq5Wk1J8z9apuN9kfxflV5w11ApzMo1O5jnTY0bUV0BXLYi3+Nf8wrX7Qn41+IpDJhWxUIxCfjX4iuheX8Q+NAEoFcsKxby/iHxqQCaAIf7EU/4263/2bg//AGWj+Ve414V/Yzi0t4hsxAzoVEmNS6H3mBtXs6cRtt7LZvagjY5YmDsdxVokV8X4bh1c32tW3I1dWCkt+8ubQNrz0PON6pfanCJcH7RYcXbI+z1OtsgkhRPiUKcxGYSuYgGDA326YKysHzOhbUJkZZ1BJGhA56byeelYbFOAGJnYOB94cpGniknzM/DCc9qibNcJ4Tiryt3drPlYCTAPsk82AA03PTrRXG8O9u2FuKouO+XKNlCid9tcsaaATrS3Bcfu2LjG1dYKSsiQ0258O41ymRrup+DjE43vlmRo7DvGmSQmcZvw65lWI3100C6x+woQXmYi3rEtoNeQ3+ZG/wB01HjhBDT7bAe+BPn0+VSYVrjuFRC0MNAJl3lEA5yfEIFBYu43eAEEMhIynrsfQgil10A14JiVGIVPxnLmOwDAocw5zmA9J9ReL+HsO1tbhFyzZtvcdQAUBVMvhWd9SQDz1jWqBwq21uLiuC+5AExHiJ/wwpnbTpV44T2avY0C5fuukKrp+IgswUkFQAJQNAmRGta8clVIlqyLsxw+0M926gW1dMojSUAdHUjaC8BVBWTuOlOsH2etLce4ttrSvvLHvD6f8lTroDmIMeHarFh+A2rdjuROUbGYIAOYLI1jQT11nQxQmMY2rcWlZ7giFJLSCfE0kyQBMSfKt4pVlCkmjnEXrdi2CVIQaBUSYG5OUcgBNIcW7vj7c3Ay57cLHLUqYI0YDKZ/ePnReNxl83ERcm7EMV9mAYzawDIBkec0Hhf/AJqjbx29I2IiR5QZ90UtvIIcWOweGGIbEPmdjcFxQT7LSG1/FLZpB0gjpVoweFS0ioi5VUAAdABAHwAHuqelt/jNpGyliTJWApOomdduRqUktGozrmKDwXEEuW84ICzvIjyMjSuMRxJVEr4zIEKRsdzr06UxMPrKAucWQbBj7o+tT4TFC4CwBEGNf686YsE1wwD6GqjiDKKeZzHf8+VWzEew38J+lVW2oZUDbQZ+MRQOiDDr4R/uzfPnWVIigDVis6gRy5cqyp7Do+fLT3EXRmykzlmVJG8rt8RU2Gxo7xnuJJ7sqMoAgxAbzO+u+tGYvhdtMzd4zhApaBBUtt1BG+o8utAHA3FtreKkW7hZUY/eK6N8DpS62I2uJXLlKBhlUS24I3gg7VtDsx5QFUf1vQrf1zphhrZLKTvIgdNaVUBHjzptHiOnTSje0R8Seh+poTiY3/jaje0KS9odZHzNPyPwK8NaDuqhWaSJC+1HOOUxUz2bWYrF3ciCVnymJE1NwrCAtJmrXguFo0MVZs2kJAO25209K3jx2jJzoqT8JJjKD55iPdHzovg3Za5iLhRYGVcxJPKQIEA660/PDVIZWDeLMVI0CFSYBMyTqPWDT/slhwlx1yDRCJI1PiHODVx4otkym0io4/sFftWbl0lItoz+191deY9qJ0ozsev2J/ib6Cr/ANqF/wCCxRhf/j3Nf8J8vz91Ufsev/D+9/oKy5oKLwXxSclkTdj2gPOkoNY1HiB0PI6b+tWv9q9mLgJMKMzjcaKAW0EGNfoKpPDARZEEDN4df8X6Ud+yhJdyt0AxEFQCDqNY1AFck1kb2WPjnGGS5lZ7i3rbAFT7IGjGcrA7x7utCHjeEcM163dd2gyGyjwiMpUqykNrrAjkNyWOK4paxOEbDlTnm0LNzciXUc9YC5vp0pNxHheRxhyhYooBcAKWtwGtvEnYsyzrIifZNaQimrGkhVxPGWfCLVtxbDMcr6nVQpOaSfFAJGwKnroYnEycIAFzMXE+Bd7YU+ZI8+hYbUq7u54lCKVkgSwnQx130qdFuJaVBlBz3DqwIgC0RBHmaHFMdBnC7yC4Xui6E1I7ogOGAypMkeGC5I86Hw1tme5cdSVlQAD4pJbKAYMAZTM88o51HwzFe2zqhAts2r5fEpUyPCcz6lQsfePQUzw+DxGS2FtuM6z7JDPu067qA2WdvDUOLSJYywN2xbd4t3Lea26ZTqSTK94ZkZoPLTyr0Hsz2hS6xVVVAlu2ss4AhS0n18Xsx76834XwPGX2ud3bb7NsrAwuU7xLEdBp6aVaew/C7li893GW8rW5W3IUscwGgAJ18O495o4+1ijZ6XiDKGOYqtYfA3DrkIJAzM0TtsASP66DSouKcWuOPCci9BufU/pSz/3QluFdizbQuvxO1bOXUcq8hXFOE33uIyWhCqROZQdee+/u5nes4dwjEDErduKAMykwynYADQGdhWj2xtDZCfVgKixXbFu7lECkzBJDQesSJFL5ESnH2WPtEmIuWwuGuG2xOrhQSBppDe+lNjC4jvCHtnLlUhp1LffkzHT50lsdsLwYktbYQBlyRrzMh5O21M8L2zaPHbQn90x9SaO8UV8kfZjXLuGwqzacgIoZMmWGmQfDmCxzgnQ86q78Q75nuB5AiVBuFVgbRIA61cl7apztP7iKix3F8JdU5rbozD2lVc3v1hvQzQpp+RfJG9i7h/Gg6FrjKJ1TKhAK9R7U607wHafC27Zz3CDmOgtv/tjlVMxYnIFe40QMwhSdfvWwYA6kUJcC6k6DzZdDMxE+VKXJ4Q01tHpmL4uHtO1kh/BI0JzEj2dNiOY3FV7h3EO8gMrKAo6aGZ15rJGx5DzpNxLE2gjKojKAMqvbdSSFOcEHwsYI8AYjmaV4V7kAPNsKJjN43DajnqI6xFRKbHeS047iYzDxn2R/R86yqp3x5NZA83Mn4kemgjSsqO7H2POb2IfIUznK5BI65TImehp3h797GWreDspcK2wz3BBdQqhQrBZ8MRrEEkjqZWYvh2IZ57m5AHJZ19B1NGcFTE2XDIt9Gb2ioKyBqQx00333roTChxwfh2GsLZxV0i7avNdVLbJ4wE+zLXBJVRJPgH7pJJEBU4BunL7JuHLGgy5tNOQigcfjLmZluEmGZxrOUuZeGBghmE89aPwolk9V+opXYAHFRq3/AFGo3tCv2lqdtfqaE4uNW/6j0Z2pbK1phuAfqaa2HgYcKZQvsn4/lGtNkvMICO9oj7yxPTYgiqVa45dXbJ/l/nRC9oLsA/Z9Iyn6ZprpXJFKjFwZc8bhTcWO8dNQSyxMxlkyNQZ1FPOyeRiUDZ3RIYkg7NlBiJBPXnrXnCdqsQOVs+qtr6+PWjOG9tb9lmZbdklgAdHBgEHQhp5U1NJicG1R6d2rsxgMUYH9w425ZT5VSOxy/wDDe9/pQnEf7Q796xdstZtgXEdSwZiVleQNMOyCf8IT/wBT6VlzS7NGnFFxRWeCuq2lLTPhgqSCpzOcwIBgiKmw1zKTkIZSNAxlp3kwo5iY8vfS7hrwiiJ2+U/rTH9rQqZDAjQEDUEeYia5Jt3RTbsY8MBa9bEINVMyOTbSd5H5Cs4ozjGXyqFtep0tx4og7an3n1kbh1yWNw3AzAHYZZjUHUb6j41ZuL8HFtbV21cZ2awxuBiDACrGw2lm35A10Qj/AM19mcf5P6KNdw8y62cy6mSt14HIlhpzHOicTg3W3YJsBM7PlUoQHzhVVvE2p8Jjb2fKi8BiiLYGYqpBOgB8RMwZ3GtWbiHCGxPDLl+3dLLaDOlvIPCtt2BUMNR4MzeZMHasoO5NGx562E9gHd7aEQPxNEnXXwiZ03Fevfs+GvhQmGuXVtC3bd1IS6oMqDoB3iZSJnYCfOvL+E2WuXMwI8IQCSOQCiBOvWrJw3tP+y3LosqDcbwlm2GsnzYz7qJP8qJbLnwns9+x3LhF9ilwDKC7LC6kys+3oNtgp2mKA4zxq0j3O8fvGYxlX73gUHXeJDbfCvO8f2hxN647vczMRAjZRIICxtsR7zTRsMDe+zUaoxXTrJMdda0ivQibifaW5c0VhbWQCACTBnUgb+k+6o8V2YuLYe7bPehcrFBKPlb7wSIYAkTB9x3qD9kCWmeFBFzIR/hmZJmg/wD1C7nYB3gpBiddA2vp8oqXsUcjHhGHtXFQtb9oDVQOcddI3+NPH4LaYANm1Op0J35fSlvCMHfcd61y2qt4lgAmZ/CAANRvJpubN8QRfWdwe7/nVeClVkDdmcOGI8UKhYjQkGdpiNiOVc3uytn7QAsCkQdOfWiBaxc5v2hZiJ7obfGhbt/EpcKteU5gCfst/wDu8qhRfs3cuN+BJxjga24Nu45BJE5gRIEx4dQfWoL6G2JNxyNgAY19ZobjHH73ed3cIOU9APKdN9tzWr/GEcZWiB0YVtwxx+Rjz9JSuKwTcPx1zvQC7FYOhMzAkVaLiKFLnuliPC+RmkkSCCCY3jQc9RVV7PXwcUvdyDlYyWBAAXxaRG3nVwscKRyHuXspUGApEljuzEDn0E771lyRXciKdC29cAfLctgCCoKFQPxTn1BI86W38aB9nIykgFjJAUazI5yeQ61YuLWFRCTcXK2rXIZcrg+A5Zyidp5mNNar+J4hhWcs3hK2kGW2oKm7madGUgQI16HnUdU9D6vyA3uJmdDA9PpImK3UIayAJuvJEnwbE6ke7b3VlLr+gplwM1ttq3FYBryrcoQf2hcNREtOFdSdg5EgEyyCCZAYyOmaBSrCtLJ/Ev1FJsZiXuEh3dwC0AkmDOv/AJ8qZYNjnt6feT6is0xt2Q8ZHif/AKj0Z2wX+69G/wBRobjg8T/9R/zovtjta9G+tPyBW1WnWD79kS2EBtmAD3aHQtHtETueZ+VJlNMrWXuxOGmde98e2bKW08JE6evnVPKM5Inv4G4xCpbaWj2kRdddnG6nK3Tagb2Fe2VFxSpZUdQY1RxmVtOoqbHmMsEkZZUy3s6iAG2AM7GKHRiSJJMQBJmANh6DpVoCB7kaRMg/pRmC4ncXRLjKOkwNd9tKAxKc58td9geXLX5VHY10qHk0SobrqDHhI1/WKZ4fCPct27UeJ3OWSIaRbXQkwdSefKg+GYJ28TiAcygE7lQCVgGRofmKtacDDgC47BRpAMR6a6Vlm8A0LBhGtE5gRAZY06idjprOlWnG4Puu9XTXD2ZI6OSp3HQGlmP4clpbYXMBJAZiecTptyFM8XhSTd7y4zDu0jQA+DMyctgfjW+oK/2ZRX5v6K1geGO1y3Mm3NtWCnxeIZvZBnYgbcxXXEcJeUE27jqsuAylknLJZSBroFI1EGoMPwx7pUqbjF3UIlsbsBM5j4VKgEyeQpz2uKJizYJ+zFs3Ms6QXZoEAawCKypLJqkL+wfZ98S9xlaO7QwIGrkQgJOyyDJAnSl74a4lx8yrrcYBiAdZPXoD9Kv/APZfhgLdy4S0syjwmNpJnr7VVzBC3d72Qx2uKc3Jy0ECN9PnTwTJFV74hCIUkGJK8lCxHSSDI86ZcNxF3JbK+0LbARvALDc+SimCcLtZSPEugkZuZA/WiMDwwqpFu4NLdwDMOWZgdRz16UWIVW2BW4SSzG5qCSFiJG2xJmss2LveAJcIznuwipmlfAGAPKc/rpUDL4GMGTcOvlE6+8VNjHcW7RR2We9JKkgwLigc+RQH3VLy8oUG0sF34Dw1bSW7bjLme6FXUGFk/e9rrTXH2UmFMTB1/iPU1R+Bd/fe0lvEMjojPmYZ/EYDEhjoSGA/8VxxLjuItXbiXXDsmZQ5UAFtSDAOni5Val4H1eyyjGASveKuUnNDAakTB16H50rW8tw27ly5vce3OYeypu5f9K6+lUEYnOxuOqydCY9AAOmg/rk0w2GdsqohYuCwKeIABmUTlkgyDpHKqTsoa8f4PYdjdGZtHMhxDZQoEEDTUwfQ0Fhez2FNstcuMrF8qjNvBXNHoGqRb9xFS3cwrBQLg1ZlY5mDlukjp0NY1lTb9lgqZmA7xDGaM2maZIFCIdgnBOEnvreUODcd7eWQSBCzqNCQCfLSr/8A+22Xu7a37qFpee5VlUHTxGYEBSesGqpwDiYt37dy3bzd13rqGnxSkQMknNAPLmKvPE+1dtcO7PbxFtMpGZrZ0nQTlJjUjfSpaT2jSLa0Vx8Kr2ntXL11w+Uz3aAiNY05SJpXjez1lUZu9vkwugCKCRoJMHqaJHF1ClzbxK2xlOdrSBSG0UjOykgnSQPlQo4/hrgym46Ex7SJudN1unbzikoxWkPs2Kv2Efiu/wD5B/srKbf8INGxyz+7Zdx/mWRPlNZToQ7itquoqC7jbaGGuIDBMSJgakxvFLrnanDL7Ja5/Cv+6KqxFFxGJi446Ow/7iK6S+w1E+41y+GZrjuFPiZiJ6Ez8daLw2AZjEj0HiPy2rKSQ6s74vl7tSpJJ1YnqQZpj2tWVtf4vrUfai2Bbtde7tz5nu1/Mn41N2nHhtf4qoCsraNH28Rd7tALhyrIVZ9nxZzpvGaDUAWj8EbmRUyAqTpCKW9oDQxO5A98VrCs2JoHXE3AIDmBHTlMb/xH41C7kjMdSAOY2AgfSmWNwzQMttoIB9gAiZEHL5q24G1LQ4RQzbNsOZHM+lGkTQuJnepcMhDAxMa7fWoncT4VgeetG4biToSQE1Eag7b/AIqydmqryX/gFk3EWYPiNyehyd0ynpJII9D0qx2MMeR/M1Ruyfai1ZLi8rBXCDMmoWCxJykzrm5TtXpNjH4cG2ouKr3R4A/hZttIPPUab1KXVEzblIQdpLRVbZYk/wB4deUZdfnQt92y3N5NsDzMhqadsiAtsCJi78YXSq7xDFMpOVo0AOx5bfOtW7gvsiKUZtf4LsFjnsjxG53QCs6hQdD4XYE+yIO/n51H2tJu4hLwY92bdtVJnU5XuR6xHxpjwzDs0XJBLW8kTAjoR6iiuOJ9lcZwpIyAabEuokecSJ+lQ3g1oa9lsa1rCLkQN42JkxuYB28gPfVY4jxJUu3vs+6N1QMsyAQ2oB+77Ujl8qtfZ9F/Z7W8MGB97Gge0HCFuWy0aiQTGvkf68qSdiaFOHBKzO/InXQefpXOF4i63Htz4SoIB8wMw9+Y/Cl+EZ7YCuMwHPyrrD3PtDoNcmvMeEUNGctMkw4OTXbOfmKNscN7wwbjDcASNJMmBvqa4wVqba+Zn10qW1jSjGUBE8zv6VE+39TOSnS6jzB8GNps1u8ytEexOhgkQzHoPhSjjnBJaWZ7l26TAFsjMeZJByqKaYfi/sAqyZvZIaQRMeXOjWuGf5Vg5zi8mL5OSOyuHsKCoDORA5LoPi2tS4Tsg1sELeYDyWPjDa0+uYgxvUaXzrv86j5uT2ZfNP2V7G9kLhBIvO0agZT/ALqC4T2b7xGJuOhVirBrZiRzBJEirY99udctjTbUscyqNSRpQubk0C5+T2C9m+z5sYi3cW7my5pGT8SlTz03q7XWB9pVPqKp3DuN97ftW1tvDeMM5UZlGhYCfFqCI30PSrQ7DqRXXxd2n2Ozic6/IjxHD8PcGV7FpgeRVSNNtCKhx/B8Ldy95bz5DmXMW0PXRh0HwqcseoNazkcvga1o2sS4XgPcgrZNsoWZvGzSCxkjwpsNh5Vqnn7X+4Ph/OspUFlTTgth2zi4SGGVsyyWQ7r3ikNBGlJeNdlUw8vad2t5gCpIlM2o8RHiXltO280N2YxPdXInwnQjkOhq6Y3GWSvdlwTdUpCjN4hqpnaQY58qVKirbKDawoOnh5/vwRv7WnypimGBWWk6HQnT4DT5UPbshGLZtyTHr5b/ABip1aYABP8AXQfrUibEfGmJUz5ADoApAEeQAHupl2o/u7J65/qtAcbU+ORBkaeoNO+McLu37Nnu0zZM2bUaTljc67GqEVAetHW3UIuayIaYuHOJgwSNcpjYxXTcAxI/+m3w/StnB4pQq93chZgAHSWDHYfiAPurSMqJYPxAZFlTusiJHlOvnIkTtQnF/bUcgigemtHXv2hbbqbb5SNZtzoJ5lZX2m2I3obiizatP1AHxWfyNS2gQrrYNamsmgoc8Awne3lBHhWGb0B2950+NFdp+Kd7fJB8NvwL7j4j8dP8IqS1c/ZcNO127t1Gn/8AI+ZpAW60CPQF4ub+FwzXCSwa5bc7ksAsE+ZQqT5mpzwy2zHLmUT1mf5mgew2GW7ZuhgCq3AwJ5MU8XxCr8KshsNO0yR7OnyqZTwl6KjDLfsjwuDRAFUDSge06hcO3myDfzB/Kj7uIt23ZGcZhoQQYnyMUs7TXg1lAGBJuCQD+6SPdtUZLwPOzazg00mM8f5iaYXVBSeWx/nSfstfAsFSVBDNoSByBnX+tKc4VdG1kGdiCPMT6EUopqTCTTSK5dwOVmGWRry5TpVTx+HdGNxDp4Z+AFekvGoO+s1WMTg5QTzC/SrizNxwQcNxS3LaI4ysoEEacqGMq0zImevyOhrrE4aF8NBLeIGs0mqdoarQ7TCscO11VHdpcANyDIYjROZjxA9JI8qJTtLkhe8ZfIFwPMxBqtNecoVV2yEyVBOUkaTG00G7NsZ+FLD2RPjTLqvaI3XS0l1iztAksBsTqcsxp0o5LV0jxFTERLNK6zp4PPz3rzQ4m5ae3cQAsrEgMCRsRqBEiCaa2e12KyybSETqAjDp5noPhWHLx8lrpr9hDi46/Kx/je0q2LjW3vMrLE5c0agMNQnQilfFO0Fq5bKrdWSQXLC5qo1iQk713w+5hcQ5a7hM7tEyXQ6AARDBToB8KsGG4Bwt9BhwD+FnuA/N63jx4V7I+KCdqxbw3CjD8QS3dHd3HhrVpUaEVg0nO4GVID+EbmJ2q9M1ApwmwLi3u7LXVGVbju9xlABEAuxgQSPfRjNWxocMorgoeRrtqjagDUmsrMxrKAPKUxGkKPyHyo3A4q4VZO6ZoMowIUBuRluh6TNd2u6tiAMx6nX66CpjiGPKPfWbph366NWsKzNnuFJO621IE9SSTr1gUztJGgEf11oBLrdaLw6E6sTFKyHOytdodGuD95Pof1q99n2+yX0H0FUXtGPHc9U+lXXs002V/hT/AEiqRaG7Co2UV0TXDVQyF7QYEHYgg+/SvKsfZZRcthiwtnKBpACtlzbb6f8Aca9TxV8W0a4dlBPw5e/aqQii5mlVAacxjed/WkJspxRvwn4URhLZnNEZevXlHmN/cKYN2cM6XPD6cvjv7qZJhUs5FKBkkEkidzqT50BaEfE8Q7PDmSgykwBrMkwBEyYP8NTcFtZrqAiRzB1ERQuNtMt1w0yHadImTIPoQQR6087GXlt4m0HVSLmZPEAQNPCRPPMIoeils9E4PbW3aCWwFXNMKoAmN6NtCGzHZZcnlCiT5b5ajbyIgch9Pd+lRu3gdG0zgCQRIWZO451kmls2abWEVxy9xzJKlmJ12kmef1NBcZ4dd+6rOPDMGdlA9kH6CrOuHtiBL6QRIUnUHSRr5+6jXdDbKGdQVBgEifOR1FMz6squDtuqQ4e3IJGYR9dTT3s5iDlZSZ+8vqJkDrIJ+Fc/+k2yP7xm23T5e10reGwqW2Rlc+EgwE0jmPaO+o060xUxvetaFt9CaW4ecqFTBgR8INHPdyowmQFaD5QYqFBlAGh5j0im/YkQPeufjPy/SlmKt3DrnNO7kH1oVgOdCYUIClwH2z8awpcb77f5qbOk1EbcU6AR4nBXCVHeP/mP61J+wsFy95c/zGml63MeXx+NbW0SNdfr/OmISLw1/wDmXP8AMf1ovD4NwQc7GOpJ+tMkSp0SmATgcS6gAmRTJMRNKkWiENFiGGesL0KHroPTAnzVlQ56ygDz9Eom3ZJ5UbguGltYgdTt/M+lPMLg0TYZj1P5D/zWDkkRDjlIV4PhLNqdB1P6c6a2eELPtE+goq5eVYka8gNSfdQF/HknLt+6D/qPSpXaWdI6FCEcbZS+2VoJeuKpkfZ6zPJZ151Z+yzfYJ/Db/0Cqt2xebrEAeym233RVl7Jt9iv8Kf6BW0dGbVDxjXBNbY1xVAIe1OKyrbt752lh+6o0/7svwNJwdAOv0qPtBiu8xJUa5SF9FT2j8c3xFaW5rO/091IhhT+yakxCg21kSdQR6CRUD3JU+ldYx8l1CNmIJHLVYNMQu43gzdsWr6+0oFtupXNlX3gmPQ+VKhdyXbYG9vu+X3gQ0/HWrbxRAmFuhNAFzD4yffpVKN6bhuFRq05eWh2+ApFxZ7HdmYBjUnl+Xu+FRuSZkjxGNo0mOvrQlt1cB+7C5gNDbP1gcz9K0yGVy5VIk6COUR05/KuZvOTuisYGWFsg3FkAiT58j1ohlU+zbUiTBPMTyA5ec0JwkMbhzagIem5I6DyNHYa3Crb18IgbagaSI8vhWscowmqdHCooHsgeWvu56Vytm0dCsR0Y/SdqICaa/1r1/reomXmI/Ll8KbJB+IWMiOwaRlaB55Tz510hmucSHa3dDAZMo7uAQZnXXaJiI5GtEHl6g/ShehS9hKnSgmtEHXWiEM+tSOsjzFGgqxeyeVcZaJYH9RUTTVEsgcA1MFha5YV0x8NUIi7vnseo/rWpFMb/EfpWga7U0AdoKkAqNa7mgDqsmtBq0TSEbmt1xNZQB0CoEnQD4Dp/wCN/KolxDv4bYgc3P5dPmaHt2C8G4Tp93l8th5D40wRgogDbpWSgls1c29GWuGr94lidzO5qdeFp+I/L9K0LpqUXgozOwA86sg867f4YW72Uf8ALQ/OPypt2Sb7Ff4U+kUi7ccRXEXibeoCIs+jElh8Y91DcJ4zdsrlAUiI1H6GnYUehtUeIvC2j3Dsis3wE1Vk7WXPvW0PoSP1rjH9pe8tXLZt5S6kSGmPdFVYUVi5cY5m3LaT66n3nX4eVGYO8FUKeVA4A52c+Q05dP1+Jo5bA6/nSJO8Vd9kqecEe6mHeC4qjmoieUiI+f1pRi7XhPxjlRuDxdtbYzPBg6GeZBEddiKBVga49y9q5bto9x2UgKiliSYGy6xR3Yr+z273tu9jECW08QtEguzDVM4GirOsTJiCKsHYjDZLfetIa7y2It/dHv8Aa+HSrrhj0Eef51SQJUVPiuIm+4yvo5GikjTTSB1+lB3LLOxOVoAETbY9SfTePcaH4txPJiLoL5R3jwWSE0bk4lfiRRGH4xd0grDEagaankQYqJcDeTWPPWDeFS5admUAhgo9gjYsdPEPxfKp/wBtYaMinQHUxv5QelaTtBc6KR5z+td2u0FwQO7TQRzpKFDfJbs6XHA6ZY1H35GpiTI2/SpBfUGMs/4pFR3uNgkzZB5Tmg/Q1GOJoT/dfMf7afUlyJMVipttz8Sg+RzgEb+dRNelyQpHTaIO+xneo8Tj0y+x962SNOTrPyFG2+LWtjb/AO1f1pdQ7EYGo0iec86lKVNd7swVXwkBhoNj+n5VCxE6UNCUga6nMe/0qN1o0BeYP0oZ8oMax6/zophYI+9GDCZgDMEjShngmj7ZGUDkJ93rVCF92yRUYNNLseRFDXLCnaR86AIFaupqNgRWB6AJM1YTXBetZqYjrPWVDnrdFASJcqZaysrMo090DM+YhVBn0HPrVG7Q9oHuMUWVToYJPm249ANB51lZQCK+rf1FSpWVlBRLW6ysoGiI2hyEelNOE8Ia8pIu5YMEFZ5aHf8AqKysprYpJUM7PZMk+K98E/Vq7w/AUsX9St1csqrrqmoBM7HWY0/nlZVEIt2CxREaemv8qaYvHstt2J2Qnbr4V+ZFarKrwHk8/a2oJKuVJ3iYJO5IOhPuoQ3+7M5sk/eQeE/xWzofUa+lZWVnGbUipRVDXDYuWVHAVz7MaqwHTmp8j8TRStWVldM0uil5MIfycSa+IZv4m+tcGsrKwNTL9wEAAakifKNfqK6TWtVlV5JWh1gmlCm7WztyytqBPqD8akd55+4aa1lZRLARIqx0zLWVlZFgRGpHQ/lU+GunUVusqkJnTNrXDPFZWUwIXI3+NRGsrKAIy1aZ4rKymByWrVZWUCP/2Q==" alt="">
                    <img src="data:image/jpeg;base64,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" alt="">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgMLRTxaUDl44SyHOLt4P5-NR6WgW7Qwk7UNPgyF0FAVL9En8VUJjfqwTj4abSP8MWwXQ&usqp=CAU" alt="">
                </div>
                <form name="form1" id="form1" action="" class="p-10 ">
                Transportation: <select name="transport" id="transport" class="py-1 px-4 rounded-lg ml-3 bg-green-300">
                    <option selected="selected">Select transportation</option>
                </select>
                <br><br>
                Stop: <select name="stop" id="stop" class="py-1 px-4 rounded-lg ml-3 bg-green-300">
                    <option  selected="selected">Select ur nearest stop</option>
                </select>
                <br><br>
                Seat: <select name="seat" id="seat" class="py-1 px-4 rounded-lg ml-3 bg-green-300">
                    <option  selected="selected">select seat</option>
                </select>
                <br><br>
                </form>
            </div>
    </section>
    <section class="p-10 bg-green-100">
        <div class="border border-green-400 p-3">
            <h1 class="font-bold text-red-500 pb-5">More Info</h1>
            <div>
                    <div class="mb-4">
                        <label  class="mr-20" for="guide">Guide: </label>
                        <input type="checkbox" id="guide" name="guide" >
                    </div>
                    <div class="mb-4">
                        <label for="translator">Translator:</label>
                        <select name="translator" id="translator" class="rounded-lg ml-10">
                            <option value=""></option>
                            <option value="ch">Chinese</option>
                            <option value="eng">English</option>
                            <option value="jp">Japan</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="PN">Book for people:</label>
                            <select name="PN" id="PN" class="rounded-lg ml-10">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                    </div>
                    <div class="mb-4">
                        <label for="PN">Duration:</label>
                            <select name="PN" id="PN" class="rounded-lg ml-10">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                    </div>
                    <div class="mb-4">
                        <form action="">
                            <label for="date">Start Date</label>
                            <input type="date" name="date" id="date">
                        </form>
                    </div>
                    <div >
                        <form action="">
                        <h3>Do you want to include traveling back??</h3>
                            <input type="radio" id="yes" name="choice" >
                            <label for="yes">Yes</label><br>
                            <input type="radio" id="no" name="choice">
                            <label for="no">No,Thanks</label><br>
                        </form>
                    </div>
            </div>
        </div>
    </section>
</section>



@endsection