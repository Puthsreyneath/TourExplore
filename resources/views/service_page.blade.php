@extends('layout.master')

@section('title', 'Service Page')

@section('content')


<section>
    <section>
    <div class="flex justify-between p-10">
        <h3 class= "text-2xl text-green-400">Service</h3>
        <div class="pr-10">
            <form action="">
            <select id="catsearch" name="catsearch">
                <option value="">Select Cateogry</option>
                <option value="Mountain">Mountain</option>
                <option value="Beach">Beach</option>
                <option value="Temple">Temple</option>
                <option value="Popular">Popular</option>
            </select>
            <select id="placesearch" name="placesearch">
                <option value="">Select Province</option>
                @foreach($places as $p)
                    <option value="{{$p->location->province}}">{{$p->location->province}}</option>
                @endforeach   
            </select>
            <input type="search" name="search" id="search">
            <script type="text/javascript">
                $('#search').on('keyup',function(){
                    $value=$(this).val();
                    $.ajax({
                        type: 'get',
                        url:'{{URL::to('search')}}',
                        data:{'search':$value},
                        success:function(data){
                            console.log(data);
                            $('#content'.html(data);)
                        }
                    })
                })

            </script>
                
            <button>Search</button>
            </form>
            
        </div>
        <div id='content'></div>
    </div>
    </section >
    
    <section class="mb-3 border border-green-400">
        <div class="flex justify-between p-10 relative">
            <div class="flex items-center">
                <img class="w-50 h-40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU" alt="">
                
                <div class="ml-10 ">
                @foreach($places as $p)
                     @if($loop->index === 0)
                        <div class="px-10 ">
                            <h2>{{$p->name}}</h2>
                            <h2>Rate </h2>
                            <h2>Available Transport: 
                             @foreach ($transports as $data)
	                        {{$data->name}},
	                        @endforeach</h2>
                            <h2>{{$p->category}},{{$p->location->province}}</h2>
                        </div>  
                        @endif
                        @endforeach   
                </div>
            </div>
            <div class="ml-5 absolute bottom-0 right-0 pb-10 pr-10">
                <a href="http://127.0.0.1:8000/detail" id="d1"><button class="bg-green-400 ml-5 px-3">Detail</button></a>
                <a href="http://127.0.0.1:8000/booking"><button class="bg-green-400 ml-5 px-3">Book</button></a>
                <a href=""><button class="bg-green-400 ml-5 px-3">Explore More</button></a>
            </div>
        </div>
    </section>
    <section class="mb-3 border border-green-400">
        <div class="flex justify-between p-10 relative">
            <div class="flex items-center">
                <img class="w-50 h-40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU" alt="">
                
                <div class="ml-10 ">
                @foreach($places as $p)
                     @if($loop->index === 1)
                        <div class="px-10 ">
                            <h2>{{$p->name}}</h2>
                            <h2>Rate </h2>
                            <h2>Available Transport: 
                             @foreach ($transports as $data)
	                        {{$data->name}},
	                        @endforeach</h2>
                            <h2>{{$p->category}},{{$p->location->province}}</h2>
                        </div>  
                        @endif
                        @endforeach   
                </div>
            </div>
            <div class="ml-5 absolute bottom-0 right-0 pb-10 pr-10">
                <a href="http://127.0.0.1:8000/detail"><button class="bg-green-400 ml-5 px-3">Detail</button></a>
                <a href="http://127.0.0.1:8000/booking"><button class="bg-green-400 ml-5 px-3">Book</button></a>
                <a href=""><button class="bg-green-400 ml-5 px-3">Explore More</button></a>
            </div>
        </div>
    </section>
    <section class="mb-3 border border-green-400">
        <div class="flex justify-between p-10 relative">
            <div class="flex items-center">
                <img class="w-50 h-40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU" alt="">
                
                <div class="ml-10 ">
                @foreach($places as $p)
                     @if($loop->index === 0)
                        <div class="px-10 ">
                            <h2>{{$p->name}}</h2>
                            <h2>Rate </h2>
                            <h2>Available Transport: 
                             @foreach ($transports as $data)
	                        {{$data->name}},
	                        @endforeach</h2>
                            <h2>{{$p->category}},{{$p->location->province}}</h2>
                        </div>  
                        @endif
                        @endforeach   
                </div>
            </div>
            <div class="ml-5 absolute bottom-0 right-0 pb-10 pr-10">
                <a href="http://127.0.0.1:8000/detail"><button class="bg-green-400 ml-5 px-3">Detail</button></a>
                <a href="http://127.0.0.1:8000/booking"><button class="bg-green-400 ml-5 px-3">Book</button></a>
                <a href=""><button class="bg-green-400 ml-5 px-3">Explore More</button></a>
            </div>
        </div>
    </section>
    <section class="mb-3 border border-green-400">
        <div class="flex justify-between p-10 relative">
            <div class="flex items-center">
                <img class="w-50 h-40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU" alt="">
                
                <div class="ml-10 ">
                @foreach($places as $p)
                     @if($loop->index === 1)
                        <div class="px-10 ">
                            <h2>{{$p->name}}</h2>
                            <h2>Rate </h2>
                            <h2>Available Transport: 
                             @foreach ($transports as $data)
	                        {{$data->name}},
	                        @endforeach</h2>
                            <h2>{{$p->category}},{{$p->location->province}}</h2>
                        </div>  
                        @endif
                        @endforeach   
                </div>
            </div>
            <div class="ml-5 absolute bottom-0 right-0 pb-10 pr-10">
                <a href="http://127.0.0.1:8000/detail"><button class="bg-green-400 ml-5 px-3">Detail</button></a>
                <a href="http://127.0.0.1:8000/booking"><button class="bg-green-400 ml-5 px-3">Book</button></a>
                <a href=""><button class="bg-green-400 ml-5 px-3">Explore More</button></a>
            </div>
        </div>
    </section>

</section>

@endsection
