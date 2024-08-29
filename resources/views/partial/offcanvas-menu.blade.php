 <!-- offcanvas Menu Start -->
 <div class="offcanvas offcanvas-end offcanvas-menu bg-white" id="offcanvasMenu">
        <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas"><i class="lastudioicon-e-remove"></i></button>
        </div>
        <div class="offcanvas-body">
            <ul class="mobile-primary-menu">
                <li><a class="menu-item-link" href="/"><span>Home</span></a></li>
                <li><a class="menu-item-link" href="/"><span>Assortiment</span></a></li>
                <li>
                    <a class="menu-item-link"  style="left:20px;" href="#" onclick="event.preventDefault(); document.getElementById('candy-form').submit();">
                        <span>Candy</span>
                    </a>
                    <form id="candy-form" action="{{ route('candy') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li>
                    <a class="menu-item-link"  style="left:20px;" href="#" onclick="event.preventDefault(); document.getElementById('diary-form').submit();">
                        <span>Diary</span>
                    </a>
                    <form id="diary-form" action="{{ route('diary') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li><a class="menu-item-link" href="/salespoint"><span>Verkooppunten</span></a></li>
                <li><a class="menu-item-link" href="/contact"><span>Contact</span></a></li>
            </ul>
        </div>
    </div>
    <!-- offcanvas Menu End -->