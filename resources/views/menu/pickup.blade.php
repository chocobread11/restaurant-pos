@extends("layouts.app")

@section("content")

<div >
    <div class="container">
        <p class="text-2xl font-bold text-center">Please pickup your order</p>
        <p class="text-xl font-light text-center">when your order is completed</p>
        <div class="flex flex-col m-10 py-4 px-10 border-2 justify-center rounded-lg ">
            <div class="flex flex-col">
                <ul class="space-y-4">
                <li><h1 class="text-2xl text-center font-bold">Your Order</h1> </li>
                <li>Order number:</li>
                <li>Total Price:</li>
                <li>Time Ordered:</li>
                <li>Order status:</li>
                </ul> 
                <div class="flex justify-center">
                <button class="bg-blue-500 w-72 cursor-pointer hover:bg-blue-700 text-white font-bold mt-10 py-2 rounded">
                                I have picked up my order
                </button> 
                </div>
                </div>
            </div>
            <div>
        </div>
    </div>
</div>
@endsection