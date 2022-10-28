@section('title')
Ứng Dụng Chat Thơ Việt
@endsection
@extends('layouts.app')

@section('content')
<div id="chat-app">
    <div class="row justify-content-center h-100">
        <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
            <div class="card-header">
                <div class="input-group">
                    <input type="text" placeholder="Search..." name="" class="form-control search">
                    <div class="input-group-prepend">
                        <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="card-body contacts_body">
                <ul class="contacts">
                <li class="active">
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                            <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                            <span>Khalid</span>
                            <p>Kalid is online</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
                            <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                            <span>Taherah Big</span>
                            <p>Taherah left 7 mins ago</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img">
                            <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                            <span>Sami Rafi</span>
                            <p>Sami is online</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img">
                            <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                            <span>Nargis Hawa</span>
                            <p>Nargis left 30 mins ago</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img">
                            <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                            <span>Rashid Samim</span>
                            <p>Rashid left 50 mins ago</p>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
            <div class="card-footer"></div>
        </div></div>
        <div class="col-md-8 col-xl-6 chat">
            <div class="card">
                <div class="card-header msg_head">
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                            <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                            <span>Chat with Khalid</span>
                            <p>1767 Messages</p>
                        </div>
                        <div class="video_cam">
                            <span><i class="fas fa-video"></i></span>
                            <span><i class="fas fa-phone"></i></span>
                        </div>
                    </div>
                    <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                    <div class="action_menu">
                        <ul>
                            <li><i class="fas fa-user-circle"></i> View profile</li>
                            <li><i class="fas fa-users"></i> Add to close friends</li>
                            <li><i class="fas fa-plus"></i> Add to group</li>
                            <li><i class="fas fa-ban"></i> Block</li>
                        </ul>
                    </div>
                </div>
                <div class="card-body msg_card_body">
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                        </div>
                        <div class="msg_cotainer">
                            Hi, how are you samim?
                            <span class="msg_time">8:40 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            Hi Khalid i am good tnx how about you?
                            <span class="msg_time_send">8:55 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                        </div>
                    </div>
                   
                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                        </div>
                        <input v-model='message' @keyup.enter='sendMessage' class="form-control type_msg" placeholder="Type your message..."/>
                        <div class="input-group-append">
                          <button type='button' class="input-group-text send_btn"  @click='sendMessage'><i class="fas fa-location-arrow"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/chat.js')}}"></script>
{{-- <script src="http://{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script> --}}
<script>
    window.App = {
        csrfToken: '{{ csrf_token() }}',
        stripePublicKey: '{{ config('services.stripe.key') }}'
    }
</script>
<script>
   
    new Vue({
        el:'#chat-app',
        data() {
        return {
          id: '{{ auth()->id() }}',
          message: "",
         
        }
      },
      methods: {
        sendMessage() {
            console.log(this.id);
            axios.post('chat/store-mes', { message: this.message })
            this.message = ""
        }
      },
      
      mounted(){
        // window.Echo = new Echo({
        //     broadcaster:'socket-io'
        // })
       
       const echo = new Echo({
            broadcaster:'soket-io'
       })
       echo.jion('group-tv')
        
      }
      
    })
 
</script>
@endsection