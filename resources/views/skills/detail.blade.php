@extends('layouts.app') 
@section('content')
<section class="Skill">
  <!-- Skill-heading -->
  <header class="Skill-heading">
    <section class="Skill-details">
      <header class="Skill-detailsHeading">
        <span class="Skill-tag tag">Skill</span>
        <h2 class="Skill-title">{{ $skill->name }}</h2>
      </header>

      <p class="Skill-description">
        {{ $skill->description }}
      </p>
    </section>

    <figure class="Skill-photo">
      <img src="" alt="{{ $skill->name }}" class="Skill-image" />
    </figure>
  </header>
  <!-- /Skill-heading -->

  <!-- Series -->
  <section class="Series">
    <article class="SerieItem">
      <header class="SerieItem-heading">
        <a href="#" class="Serie-skillLink">
          <span class="Serie-skillName">{Serie skill}</span>
        </a>

        <span class="SerieItem-step">Step 1</span>
      </header>

      <section class="SerieItem-body">
        <h4 class="Serie-title">
          <a href="/series/1" class="SerieItem-link">
            {Serie title}
          </a>
        </h4>
      </section>

      <footer class="SerieItem-footer">
        <div class="Serie-info">
          <span class="Serie-count Serie-lessonsCount">{Serie lessons count}</span>
          <span class="SerieItem-count Serie-level">{Serie level}</span>
        </div>
      </footer>
    </article>

    <article class="SerieItem">
      <header class="SerieItem-heading">
        <a href="#" class="SerieItem-skillLink">
            <span class="SerieItem-skillName">{Serie skill}</span>
          </a>

        <span class="SerieItem-step">Step 1</span>
      </header>

      <section class="SerieItem-body">
        <h4 class="SerieItem-title">
          <a href="/series/1" class="SerieItem-link">
              {Serie title}
            </a>
        </h4>
      </section>

      <footer class="SerieItem-footer">
        <div class="SerieItem-info">
          <span class="SerieItem-count Serie-lessonsCount">{Serie lessons count}</span>
          <span class="SerieItem-count Serie-level">{Serie level}</span>
        </div>
      </footer>
    </article>

    <article class="SerieItem">
      <header class="SerieItem-heading">
        <a href="#" class="SerieItem-skillLink">
              <span class="SerieItem-skillName">{Serie skill}</span>
            </a>

        <span class="SerieItem-step">Step 1</span>
      </header>

      <section class="SerieItem-body">
        <h4 class="SerieItem-title">
          <a href="/series/1" class="SerieItem-link">
                {Serie title}
              </a>
        </h4>
      </section>

      <footer class="SerieItem-footer">
        <div class="SerieItem-info">
          <span class="SerieItem-count Serie-lessonsCount">{Serie lessons count}</span>
          <span class="SerieItem-count Serie-level">{Serie level}</span>
        </div>
      </footer>
    </article>

    <article class="SerieItem">
      <header class="SerieItem-heading">
        <a href="#" class="SerieItem-skillLink">
                <span class="SerieItem-skillName">{Serie skill}</span>
              </a>

        <span class="SerieItem-step">Step 1</span>
      </header>

      <section class="SerieItem-body">
        <h4 class="SerieItem-title">
          <a href="/series/1" class="SerieItem-link">
                  {Serie title}
                </a>
        </h4>
      </section>

      <footer class="SerieItem-footer">
        <div class="SerieItem-info">
          <span class="SerieItem-count Serie-lessonsCount">{Serie lessons count}</span>
          <span class="SerieItem-count Serie-level">{Serie level}</span>
        </div>
      </footer>
    </article>

    <article class="SerieItem">
      <header class="Serie-heading">
        <a href="#" class="Serie-skillLink">
                  <span class="Serie-skillName">{Serie skill}</span>
                </a>

        <span class="Serie-step">Step 1</span>
      </header>

      <section class="Serie-body">
        <h4 class="Serie-title">
          <a href="/series/1" class="Serie-link">
            {Serie title}
          </a>
        </h4>
      </section>

      <footer class="Serie-footer">
        <div class="Serie-info">
          <span class="Serie-count Serie-lessonsCount">{Serie lessons count}</span>
          <span class="SerieItem-count Serie-level">{Serie level}</span>
        </div>
      </footer>
    </article>

    <article class="SerieItem">
      <header class="SerieItem-heading">
        <a href="#" class="SerieItem-skillLink">
                    <span class="SerieItem-skillName">{Serie skill}</span>
                  </a>

        <span class="SerieItem-step">Step 1</span>
      </header>

      <section class="SerieItem-body">
        <h4 class="SerieItem-title">
          <a href="/series/1" class="SerieItem-link">
              {Serie title}
            </a>
        </h4>
      </section>

      <footer class="SerieItem-footer">
        <div class="SerieItem-info">
          <span class="SerieItem-count Serie-lessonsCount">{Serie lessons count}</span>
          <span class="SerieItem-count Serie-level">{Serie level}</span>
        </div>
      </footer>
    </article>

    <article class="SerieItem">
      <header class="SerieItem-heading">
        <a href="#" class="SerieItem-skillLink">
                      <span class="SerieItem-skillName">{Serie skill}</span>
                    </a>

        <span class="SerieItem-step">Step 1</span>
      </header>

      <section class="SerieItem-body">
        <h4 class="SerieItem-title">
          <a href="/series/1" class="SerieItem-link">
                {Serie title}
              </a>
        </h4>
      </section>

      <footer class="SerieItem-footer">
        <div class="SerieItem-info">
          <span class="SerieItem-count Serie-lessonsCount">{Serie lessons count}</span>
          <span class="SerieItem-count Serie-level">{Serie level}</span>
        </div>
      </footer>
    </article>

    <article class="SerieItem">
      <header class="SerieItem-heading">
        <a href="#" class="SerieItem-skillLink">
                        <span class="SerieItem-skillName">{Serie skill}</span>
                      </a>

        <span class="SerieItem-step">Step 1</span>
      </header>

      <section class="SerieItem-body">
        <h4 class="SerieItem-title">
          <a href="/series/1" class="SerieItem-link">
                  {Serie title}
                </a>
        </h4>
      </section>

      <footer class="SerieItem-footer">
        <div class="SerieItem-info">
          <span class="SerieItem-count Serie-lessonsCount">{Serie lessons count}</span>
          <span class="SerieItem-count Serie-level">{Serie level}</span>
        </div>
      </footer>
    </article>
  </section>
  <!-- /Series -->
</section>
@endsection