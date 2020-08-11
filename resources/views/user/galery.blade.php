@extends('layouts.user')
@section('link-galery','active')
@section('main')
<div class="container mb-5">
    <div class="text-center mt-5 ">
        <div class="block-heading-1">
            <h2>Gallery</h2>
        </div>
    </div>
    <hr>
    <div class="owl-carousel owl-all">
        @foreach ($gallery as $item)
        <div class="block-team-member-1 text-center rounded h-100">
            <img src="{{asset('images/gallery/'.$item->image)}}" class="img-thumbnail picture" style="height:275px">
            <h3 class="font-size-20 text-black">{{$item->judul}}</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">{{date('d F Y', strtotime($item->created_at))}}</span>
        </div>
        @endforeach
    </div>
    <div class="text-center">
        {{$gallery->links()}}
    </div>
    </div>

    {{-- Modal Image --}}
    <div class="modal fade imageModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 id="judulImage"></h1>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="itemImage" class="img-thumbnail">
                </div>
            </div>
        </form>
        </div>
    </div>

    @section('script')
        <script>
            $(function(){
                $('.picture').click(function () {
                    var src = $(this).attr('src');
                    $('#itemImage').attr('src',src);
                    $('.imageModal').modal('show');
                });
            });
        </script>
    @endsection
@endsection
