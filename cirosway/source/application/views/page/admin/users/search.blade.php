@layout('main')

@section('script')
    <script>
        var _0x77b7=["\x50\x4F\x53\x54","\x2F\x61\x64\x6D\x69\x6E\x2F\x75\x73\x65\x72\x73\x2F\x73\x65\x61\x72\x63\x68","\x76\x61\x6C","\x5B\x6E\x61\x6D\x65\x3D\x73\x65\x61\x72\x63\x68\x5F\x74\x78\x74\x5D","\x3C\x64\x69\x76\x20\x73\x74\x79\x6C\x65\x3D\x22\x77\x69\x64\x74\x68\x3A\x31\x30\x30\x25\x3B\x20\x74\x65\x78\x74\x2D\x61\x6C\x69\x67\x6E\x3A\x63\x65\x6E\x74\x65\x72\x3B\x20\x6D\x61\x72\x67\x69\x6E\x2D\x74\x6F\x70\x3A\x35\x30\x70\x78\x3B\x22\x3E\x20\x3C\x69\x6D\x67\x20\x73\x72\x63\x3D\x22\x2F\x69\x6D\x67\x2F\x6C\x6F\x61\x64\x2E\x67\x69\x66\x22\x20\x2F\x3E\x3C\x2F\x64\x69\x76\x3E","\x68\x74\x6D\x6C","\x23\x73\x65\x61\x72\x63\x68\x5F\x75\x73\x65\x72\x73\x5F\x74\x61\x62\x6C\x65","\x61\x6A\x61\x78","\x63\x6C\x69\x63\x6B","\x5B\x6E\x61\x6D\x65\x3D\x73\x65\x61\x72\x63\x68\x5F\x62\x75\x74\x74\x6F\x6E\x5D","\x72\x65\x61\x64\x79"];$(document)[_0x77b7[10]](function (){$(_0x77b7[9])[_0x77b7[8]](function (){$[_0x77b7[7]]({type:_0x77b7[0],url:_0x77b7[1],data:{email:$(_0x77b7[3])[_0x77b7[2]]()},beforeSend:function (){$(_0x77b7[6])[_0x77b7[5]](_0x77b7[4]);} ,success:function (_0x966ex1){$(_0x77b7[6])[_0x77b7[5]](_0x966ex1);} });} );} );

    </script>
@endsection

@section('content')
<div class="form-search" style="width:250px; margin:0 auto;">
    <div class="input-append">
        <input name="search_txt" type="text" placeholder="User's email" class="span3 search-query" onchange="$('[name=search_button]').click()" onkeypress="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();">
        <button name="search_button" type="submit" class="btn btn-danger"><i class="icon-search icon-white"></i>&nbsp;</button>
    </div>
</div>

<div id="search_users_table">
    {{-- Results --}}
</div>
@endsection



<?php
/*
 * UNobfuscated Javascript
 */

/*
  $(document).ready(function()
            {
                        $('[name=search_button]').click(function()
                        {
                            $.ajax(
                                    {
                                        type: "POST",
                                        url: "/admin/users/search",
                                        data:   {
                                                    email: $('[name=search_txt]').val()
                                                },
                                        beforeSend: function()
                                        {
                                            $('#search_users_table').html('<div style="width:100%; text-align:center; margin-top:50px;"> <img src="/img/load.gif" /></div>');
                                        },
                                        success: function(data)
                                            {
                                                $('#search_users_table').html(data);
                                            }
                                    }
                            )
                        });
            }
        );
*/

?>