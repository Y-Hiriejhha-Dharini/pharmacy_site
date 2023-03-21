<section class="max-w-xl mx-auto m-10">
    <x-outerPannel>
       <form action="/image_upload" method="POST" class="mb-10">
        @csrf
        <h2 class="font-semibold text-xl text-gray-500 dark:text-gray-200 leading-tight text-center uppercase font-serif">
            {{ __('Upload Prescription') }}
        </h2>
            <x-form.input name="upload_images[]" id="upload_images" type="file" multiple="multiple" class="mt-10 mb-5 ml-4"/>
            <x-form.textarea name="note" id="note" class="mb-5"/>
            <x-form.input name="delivery_address" id="delivery_address" class="rounded w-full mb-5 ms-2 ml-2"/>
            <x-form.input name="delivery_time" id="delivery_time" type="time" class="rounded w-full mb-5 ml-2"/>

                <x-primary-button class="mx-3">
                    {{ __('SAVE') }}
                </x-primary-button>
                <x-primary-button class="ml-3" type="reset">
                    {{ __('CANCEL') }}
                </x-primary-button>
       </form>
    </x-outerPannel>
    <script type="module">
        $(document).ready(function(){
            $('#upload_images').change(function(){
                var limit = 5;
                console.log(limit);
                var files = $(this)[0].files;
                if(files.length > limit){
                    alert("You can select max "+limit+" images.");
                    $('#upload_images').val('');
                    return false;
                }else{
                    return true;
                }
            });
        });
        </script>
</section>