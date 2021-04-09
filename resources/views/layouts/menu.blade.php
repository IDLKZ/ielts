<li class="nav-item">
    <a href="{{ route('headers.index') }}"
       class="nav-link {{ Request::is('headers*') ? 'active' : '' }}">
        <i class="fas fa-heading"></i>
        <p>Заголовки(Title)</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('backgrounds.index') }}"
       class="nav-link {{ Request::is('backgrounds*') ? 'active' : '' }}">
        <i class="fas fa-image"></i>
        <p>{{__("admin.background")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('ielts.index') }}"
       class="nav-link {{ Request::is('ielts*') ? 'active' : '' }}">
        <i class="fas fa-language"></i>
        <p>Ielts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('advantages.index') }}"
       class="nav-link {{ Request::is('advantages*') ? 'active' : '' }}">
        <i class="fas fa-thumbs-up"></i>
        <p>{{__("admin.advantages")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('abouts.index') }}"
       class="nav-link {{ Request::is('abouts*') ? 'active' : '' }}">
        <i class="fas fa-building"></i>
        <p>{{__("admin.about")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('news.index') }}"
       class="nav-link {{ Request::is('news*') ? 'active' : '' }}">
        <i class="fas fa-newspaper"></i>
        <p>{{__("admin.news")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('services.index') }}"
       class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <i class="fas fa-handshake"></i>
        <p>{{__("admin.services")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('teachers.index') }}"
       class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
        <i class="fas fa-user"></i>
        <p>{{__("admin.teachers")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('teacherLinks.index') }}"
       class="nav-link {{ Request::is('teacherLinks*') ? 'active' : '' }}">
        <i class="fas fa-user-circle"></i>
        <p>{{__("admin.teacher_links")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('galleries.index') }}"
       class="nav-link {{ Request::is('galleries*') ? 'active' : '' }}">
        <i class="fas fa-camera"></i>
        <p>{{__("admin.gallery")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('prices.index') }}"
       class="nav-link {{ Request::is('prices*') ? 'active' : '' }}">
        <i class="fas fa-money-bill-wave"></i>
        <p>{{__("admin.price")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('faqs.index') }}"
       class="nav-link {{ Request::is('faqs*') ? 'active' : '' }}">
        <i class="fas fa-question"></i>
        <p>F.A.Q</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('reviews.index') }}"
       class="nav-link {{ Request::is('reviews*') ? 'active' : '' }}">
        <i class="fas fa-comment"></i>
        <p>{{__("admin.review")}}</p>
    </a>
</li>




<li class="nav-item">
    <a href="{{ route('phones.index') }}"
       class="nav-link {{ Request::is('phones*') ? 'active' : '' }}">
        <i class="fas fa-phone"></i>
        <p>{{__("validation.attributes.phone")}}</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('emails.index') }}"
       class="nav-link {{ Request::is('emails*') ? 'active' : '' }}">
        <i class="fas fa-envelope"></i>
        <p>Emails</p>
    </a>
</li>





<li class="nav-item">
    <a href="{{ route('seos.index') }}"
       class="nav-link {{ Request::is('seos*') ? 'active' : '' }}">
        <i class="fas fa-search"></i>
        <p>SEO</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logos.index') }}"
       class="nav-link {{ Request::is('logos*') ? 'active' : '' }}">
        <i class="fas fa-image"></i>
        <p>Лого</p>
    </a>
</li>




<li class="nav-item">
    <a href="{{ route('footers.index') }}"
       class="nav-link {{ Request::is('footers*') ? 'active' : '' }}">
        <i class="fas fa-box"></i>
        <p>Футер-Footer</p>
    </a>
</li>


