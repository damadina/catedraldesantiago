<div class="mt-4 mb-4">
    <button wire:click="like" class="items-center btn-primary rounded-lg px-2 py-2">

            <img src="{{URL::to('/').'/images/logoLike.png'}}" class="inline-block align-baseline " width="15" height="15" alt="">
            <span class="inline align-baseline font-semibold pl-1">{{$likes}}</span>
            <span class="ml-1 inline">Like</span>


    </button>
</div>
