@extends('layout.master')

@section('title', 'Product Detail')

@section('content')

<section class="md:w-[90%] w-4/5 mx-auto">
    <div class="mt-5">
        <button
            class="dark:bg-gray-500 dark:hover:bg-gray-800 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-7 rounded-full">
            Back
        </button>
        <h1 class="my-10 font-black text-4xl text-green-700 dark:text-white text-center">Pidan Silk</h1>
        <img class="rounded-3xl w-full h-full object-fill"
            src="https://www.collinsdictionary.com/images/full/giftshop_400698646_1000.jpg"
            alt="">
        <div class="my-5 md:text-2xl space-y-4 text-lg dark:text-white flex flex-col md:w-4/5 md:mx-auto">
            <div class="flex space-x-16">
                <p>Rate:</p>
                <div class="rating-css">
                    <div class="star-icon">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="flex space-x-9">
                <p>location:</p>
                <p>Bet Trang, Prey Nob, Sihanoukville</p>
            </div>
        </div>
    </div>

    <div class="w-full my-10">
        <h2 class="mb-5 font-black text-4xl text-green-700 dark:text-black">Detail</h2>
        <p class="text-xl dark:text-white">A pidan is a type of silk cloth used in Cambodian and Khmer weddings, funerals, and Buddhist ceremonies as a canopy or tapestry. Pidan are often decorated with images of wats, nāgas, apsaras, scenes from the life of Buddha, Angkor Wat, animals (especially elephants), and plants.</p>
    </div>

    <div class="w-full my-10">
        <h1 class="mb-5 font-black text-4xl text-green-700 dark:text-black">Review</h1>
        <div class="flex flex-col space-y-4">
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,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"
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">Linda C</h5>
                    <div class="rating-css">
                        <div class="star-icon">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">As per the subject - your customer service is awesome , your website is awesome as are you prices - sold - you have a new customer! THANKS</p>
                </div>
            </div>
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,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"
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">Tep Seyha</h5>
                    <div class="rating-css">
                        <div class="star-icon">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">It is in perfect condition and works like a dream. Thank you so much for excellent customer service and an excellent product.</p>
                </div>
            </div>
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,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"
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">John Smith</h5>
                    <div class="rating-css">
                        <div class="star-icon">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">I'm very satisfied. They are high-quality and worth the money.</p>
                </div>
            </div>
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHgAeAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQADBgcBAv/EAD8QAAIBAwIDBgIIAggHAAAAAAECAwAEEQUSITFBBhMiUWFxgZEUIzJCUqGxwWLwBxUkM3KS0fEWJVOistLh/8QAGgEAAgMBAQAAAAAAAAAAAAAAAgMAAQQFBv/EAB8RAAMBAAMBAQEBAQAAAAAAAAABAhEDITESE1FBIv/aAAwDAQACEQMRAD8A1ckXpQk8I8PD737U2kShZYz3iDHU/pXOVGgXPD6ULJB6U3kj9KHaM0WkE8kHpSXW0EaRnHEvgevA1q3j9KHudJkuO6LKFQPkMw58Og60UPspvoZ6bABaEnhyq2VUTmwHU56V8rcEp9RuCA43L1PkPM/lSm6u57yc2tk+1E/vbg8Qn+D1x975YreubFiM/wAazO6lpLTXUiw3DB+9LERcxk8j060sKrbXEkMks02w4YjA2+fy61u7bTxYabNcRJ3fcKVhDnnK3VvXjx9qyFvpSvKiRZMTZCFuBfhncfU5zQK2/QsRIooZ1xFMo3LvXvVI3D36Yqu9t9Q0+PeiOU5gxyY4fvTfR7RJGntX/vYQJ4Cef3dw/wC4Uxs7WSHvbaMKYd2FVhkYPFfy4fCp+jRM0xC9orpOBkufioajU7Q3IiWRmjKMBjemK+u0vZmMxnU9PjKpEf7TAeJi/i/w/wCtLk0+S/iS3jVS5PAMccqbNtoHMGydo8/ahjb1V8VKSTdmNTj5Wm4fwSA/vUq/0ZXR3J0od0zKnoD+1GuMVRwa5GMHCMDjzyM1xzUCvHQ7xcaZlM8RXzHbq8gErbUHFj5CrXpD40vSw4W4uFypOI0/EfP2FAaiW1DUvoFqxZAfrXA4Y8vmQP8Aamms6ulpYTznamR3aL/4qP1PyrK6dftb6bJcEnfcM8u7OcL9lR8yxrUpSQpvS/tLdxWpjsITnfncR+HIz/mJA9s18II9O0ksq73LeMdW5uw+IBX41j76/E+vRENuV41f2HHH6saai+719kjEIkZdsHzkT9kPzpniwmD7X7x10zTbKSQGVgJpf4s4xn350jjmH0a3bG0xoWYewoTWb03s8cmQGZwvPG1R+1B6vfCOJYY/tTnAI6Z/3HyqIjQ9t5Uj1GN2ALiF1bPMn+QKPS7UG5VuSNjIPQE/sRWQbUC2qSbDhPGw49Mirjfg/SAfvjJx7gH9KjKNrLJ3N5HcRfViRdr449Of6/A1mHsI9P1SF4cLbu5G3/pny9vKjhflwGypIHX41XKVusxk887T5Eefwq4eMqvA3fGeTr86lC21oFbgN8g644LUp4g6DJ4RnBI8h1oAXEa3TXRBEe0OeHQk8x8KB/4jkP2tJufdJEYfqK+V12ATvJLYX0e4KM7FOcZ8m9a5S1I3NDWEbRhR4ccAOQqX8n0eweXGT+Hz8h8TigrbWbCWQRxrcoxOAGtnA+eMV7q8VzqEIgtQF8QO9s4UDjk44n2FHC71gsxuoXE2s6iltC26K2B8fIbz9pifIc/lQvaO9+jwtaxv0VF/gUDHz5n4+lNriG20TTJZkSaaCHBdoo2dpX+6W25AA5gZwOZJNZCTT9S1Gzk1Z7cR220yb5JkUKvmcnJ+FOT+vC5hnsEQRFvigwbaJIl9duAK9ilIS4uQfA57tOPB1XAB+JGaUTatbvHArzle7Urja2Ph+XyqRul8TDaXCOyrkR8iFHoaa4teoiafgxluFMgiZyVXBY5wccjj3NAiR77UhKPsI3DFU3Npeo4hKNvJwwYYIPXOaZ2cLW0aRJHmZ+C+9VhPnQBJG/rCQgkKEKivbe577Yc47wFc55bhwPzFMNQ017JlxliV5+Z61m45WtGZHVlQHw7hjh1qAucNTDqJEuzPApn86N0m+7+7ZCcjh+YrLmRWuEdW4EZo/s9Li9Y54EgVaAZvVdpo/qh3cJ5uetSrbNUYwmTipxkZqVo0zmVth3x2xKGbyXi1ObKyvmcDu3XpuZioqldPXIPdpkdHXING21tNuCRJGhyANg5/rXn5pHSbHGniO1BknkDlR91y2PiTSXttr91b6b3ceYpXUEI3MKeWR0J505Cx6TavJcMrzxrucycVi/1PpXKO1Goz6lqMh8ZCHxMeJ3nnn25fA10OKdFesZ9iO13aDSbo28M30i3dtxSXn75rc9oblu0emrFJpKxxknvXgmKsQR1AHHz4+VYHsXaB7wFsHIHGutwWhtCJIRleoosUcn1I1LV2c07LaLGdItrpxtnOS7DhjBIxn4VZqEOph2RZRPEWO0OBIMdBgjhWmtYI9J1O5sL0iC1u7p5tPnk4Ryd4dxhzyDhicKeY5UdcdnY53O0KrfKtztfTdCVGpJHN5NNiikQRx9xKRxls12ru9U5Gn/Z/e+oR6ffoqXbKWgdR4ZgOePIjqPlmtVD2TWMhywHsazPbGzk1DVNO0DQI3e/jlF1JOuR3AAIHH3P5VS+beMt7KLu0bCzAUhd55ZrLXVrNeoR4SDzG3IrztRZ9pbTXotM1e+aQyR70mdRwUc8HHsOPnVNkl/bSSI0soiVefeNl2zyyG5etT8s70B3/AI0Jru2msHVWYbTypp2c8dyhHLOaqudNjngLu1zGy8cNIZAP81D6FqUWn3qC6Ldy2V3gZx7j/egU99A0zepfzxsqrtwvAZFSkmraxFp5ik7rvUlbCsjDiMZBqUYlJnSVsYQOK8B0r4up/wCr4i1rCqOeCnr865UnbvXgON4x94k/9aaaV2o1PVEuY7qcMsUDMMRqMHkOXvXDjgcv02BfaLVHgsWcyGSZj4M9G/FjzHP5VjrKP7ALbQ+Dk021XNzC69Y8dP59aXyRMNLhnB2qC0TcM/z/APK6EdFeGp7E26C/YR7Tjj4eVdVjYCLYccRXJ/6OpcSoW4blI+RrqRkBQbaFv/ofHgt1WPfHLbuFeCUYeN13Kw9QeBrOJHqGmt/y27mijXlESJIx6ANnA9ARWg1CRuPWgowsjBXNPisWErBdFP2n1e8W0i1FYXfm6Qqu0e5zXQ+yug6dodj3dr9bcS+K4upWLyTP5sx4mso9hJFIJrKUpIF54zmgk1vUNPLpcvvbPgYDHDyonTAcKkGf0qaSTPp+uCN5obRniuhGMssLji+Ou0gH50jt+zcb26XMDJPbyjckiHcrD0o+ftHdXltJb5O11KsT60Jp39lkY28ktqZGzIbdwA58yhBUn1xn1qbs4D8gmo6T3MDYHCsAlgb7UxEM9zG+6UqeOPIGtL2j7R6guq3FlDeI9smAXMADk448QcflVGhQpDF4RxJ4k82OeZqT0J5GN7pNPisEWVN6qAiK8IcjhgcOVSjbj6K6R95EXYsNqouTuzw4e9e0+IulqM9NJnOEsyQOHSnmg2/cxX2VwxhUjpnDA/oKuXTSCBk1Vo0si3dzxBeGYqEzzXyP51xZp12a9HVpZRPaX8hGUd4yvpwOaVR2ubO6s8/e3xMfMcMGh9Y18oksNjaPEUbxgNyPtS6x18CdzcxERuPGgOcHqwPTnWqVWaX0zRdlENtBCyjGx2HwzXRLe83RAg8659pFyJJmjGSrcVYDI+YrR2d00J7tvhVe9jZ6H0n1owKBudB3N9JjuJopQOatw/ynhV1ncqz4JxTuMB48E9KNVhemXa+1eyGGW3uFHUDa3yP+tBXGs2koY3lvLFKfNcD51oNQ0vvMkOVPoaTjSnEhLvlfPFNVBbOeC0Xtq8qQ253lhkkKcD40HrmqppNjJOcGRzsjX8THlR+qz2tkjMWRFQZLHkBXL9f1aTV7+OYBhbxN9UnU+bGol9MTVYiSyO16O8YszEsxPU9a2GkENAwXJK8f5+VZvULEp3c6HgJCpPTDDKn9aedn9ykxE4k6fxDHSrTWiKWoe3iNLGBH9vIK+LHXPOpX1KsgCFdwYceA4jhXtNXL89CORVqww952oe4t2CIYwee1uPwNKZLgPHuj4YGRjoaUo57thV9k+Q6Hopqo45hZKwNhmn3plunEpOZhtLdT5fvRC3i5jhuiokiGzxjwyL0B8iPOkkUndXIbyo667u5jWQezUblUsLTxm/7Fxm4gmMSkIh4DduxWqe07yPgcOORrGf0S6hFb3dxpkxAM31kJPUj7Q/Q10e5t9h3ryNZbnHhpmtQjjuTA+yXKsOtHx62Yxg8fWvm+t47iM7gN3Q1n7m2kiJ2OcUKQSZoG1lpDneAPel+r9pY7W0kdm4KuSRxpLtkf7RpN2kXNoYVIBc8fYVZHRmNc7QXOqT+IlYVOQnn6mqIm3SKq9FoK5i2XEka8drYo/TV7hxLN9lTwH4j0FPS66M7ffZs9Lkt2sDY3h8W3Z6leY+INN9NitmCJc7SBw7wdPI5rB3OuXFrKrwbN/EMWUGmuhdoZZ3ZZUXdxZipwAPOlVLzS0zoM6NEAC+9SCAeuCMVKUm9zbBmYI2MrjhmpQ/h+nelrlfH1hyEH7WPOr7HgZD6VKla0KB3P1pPrV53DxR8M9ByNe1KKfSme213LbzpLEzRzRsGR1OCp86692V7ZRavbCC52x3SDxp0b1HpUqUrllBw+xxcOGGUYUnn4kh2Fe1KQkaAC5u4LWNjuBwKxGr6uJ5ZTGxLkbV9KlSnzKFU2hUqpCvfSnLHiBQjXEjSbs+3pUqUb/gpEc8BnkKOs7hIbK4jQHvJl259KlSrf8IV213cRqYhM+z8OeFSpUq0lhD//2Q=="
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">Neary Sok</h5>
                    <div class="rating-css">
                        <div class="star-icon">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">Great product, worth the money. That's what I'm looking for.</p>
                </div>
            </div>
            <div
                class="flex items-center md:flex-row flex-col bg-white rounded-lg border shadow-md hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 p-5">
                <img class="object-fill w-32 h-32 lg:w-36 lg:h-36 rounded-full"
                    src="data:image/jpeg;base64,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"
                    alt="">
                <div class="flex flex-col p-4 leading-normal items-center md:items-start">
                    <h5 class="mb-2 md:text-2xl text-lg font-bold tracking-tight text-gray-900 dark:text-white">Heng Dara</h5>
                    <div class="rating-css">
                        <div class="star-icon">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <p class="font-normal md:text-xl text-sm text-gray-700 dark:text-gray-400">Good website, easy to use and the product is in a good condition.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center pt-7">
            <button type="button"
                class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Load
                more</button>
        </div>
    </div>

    <div class="my-10">
        <h3 class="mb-5 font-black text-4xl text-green-700 dark:text-black">Feedback</h3>
        <div class="space-y-4 text-xl mb-10">
            <div class="my-5 flex flex-row items-center md:justify-center space-x-4">
                <p>Rate Product:</p>
                <div class="rating-css">
                    <div class="star-icon">
                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                        <label for="rating1" class="fa fa-star"></label>
                        <input type="radio" value="2" name="product_rating" id="rating2">
                        <label for="rating2" class="fa fa-star"></label>
                        <input type="radio" value="3" name="product_rating" id="rating3">
                        <label for="rating3" class="fa fa-star"></label>
                        <input type="radio" value="4" name="product_rating" id="rating4">
                        <label for="rating4" class="fa fa-star"></label>
                        <input type="radio" value="5" name="product_rating" id="rating5">
                        <label for="rating5" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div>
                <form action="" class="flex space-x-3">
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                        placeholder="write any message..." required>
                    <button type="submit">
                        <svg class="w-10 h-10 text-gray-500 origin-center transform rotate-90 hover:text-green-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection