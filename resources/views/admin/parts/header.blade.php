<div class="admin-content-top-left">
                        <ul class="flex-box">
                            <li>
                                <i class="ri-search-line"></i>
                            </li>
                            <li>
                                <i class="ri-drag-move-line"></i>
                            </li>
                        </ul>

                    </div>
                    <div class="admin-content-top-right">
                        <ul class="flex-box">
                            <li>
                                <i class="ri-notification-4-line" number="3"></i >
                            </li>
                            <li>
                                <i class="ri-message-2-line" number="5"></i>
                            </li>
                            <li class="flex-box">
                                <a href="/home"><img style="width: 50px;" src="{{asset('backend/asset/images/logo.png')}}" alt=""></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i style="font-size: 30px; padding-left: 20px" class='bx bxs-log-out'></i>
                                </a>
                            </li>
                        </ul>
                        
                    </div>