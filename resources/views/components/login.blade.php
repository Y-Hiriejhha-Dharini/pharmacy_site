<section class="max-w-xl mx-auto m-10">
    <div class="bg-white px-6 py-12 rounded-xl shadow-md shadow-gray-500 border-gray-300">
       <form action="" class="mb-10">
        <h2 class="font-semibold text-xl text-gray-500 dark:text-gray-200 leading-tight text-center uppercase font-serif">
            {{ __('Upload Prescription') }}
        </h2>
            <div>
                <label for="" class="uppercase text-sm font-semibold">Upload Images</label>
                <input type="file" id="images" value="{{old('images')}}" require accept="image/png, image/jpeg" multiple class="rounded mt-10 mb-5 ml-5 border border-gray-300 m-2 font-serif">
                @error('images')
                    <ul class="text-sm text-red-600">
                        <li>{{$error->message}}</li>
                    </ul>
                @enderror
            </div>
            <div>
                <label for="" class="uppercase text-sm font-semibold">Note</label>
                <textarea name="note" id="note" value="{{old('note')}}" require class="w-full rounded mt-2 mb-5 border border-gray-300 m-2 font-serif" cols="5" rows="5" ></textarea>
                @error('note')
                    <ul class="text-sm text-red-600">
                        <li>{{$error->message}}</li>
                    </ul>
                @enderror
            </div>
            <div>
                <label for="" class="uppercase text-sm font-semibold">Delivery Address</label>
                <input type="text" require class="w-full rounded mt-2 mb-5 border border-gray-300 m-2 font-serif" value="{{old('delivery_address')}}">
                @error('delivery_address')
                    <ul class="text-sm text-red-600">
                        <li>{{$error->message}}</li>
                    </ul>
                @enderror
            </div>
            <div>
                <label for="" class="uppercase text-sm font-semibold">Delivery Time</label>
                <input type="time" require class="w-full rounded mt-2 mb-5 border border-gray-300 m-2 font-serif" value="{{old('delivery_time')}}">
                @error('delivery_time')
                    <ul class="text-sm text-red-600">
                        <li>{{$error->message}}</li>
                    </ul>
                @enderror
            </div>
            <div class="float-right mt-4 mb-5">
                <input class="bg-blue-500 mx-6 uppercase text-center rounded-md p-2 hover:bg-blue-700 text-sm font-semibold text-white" value="Save">
                <input class="bg-red-500 uppercase text-center rounded-md p-2 hover:bg-red-700 text-sm font-semibold text-white" value="Cancel">
            </div>
       </form>
    </div>
</section>