@extends ('layouts.app') 
@section ('content')
<section class="Home">
    <!-- Hero -->
    <section class="Hero">
        <div class="Hero-content">
            <h1 class="Hero-title">Its kinda like netflix for your career!</h1>

            <p class="Hero-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis mollitia nihil esse, at ipsam officia consectetur fuga
                reprehenderit velit expedita vitae repellat voluptatem doloremque dolor? Quibusdam soluta corporis aliquid
                quos.
            </p>

            <div class="Hero-actions">
                <a href="#" class="Hero-link">Get started</a>
                <a href="#" class="Hero-link">Browse now</a>
            </div>

            <figure class="Hero-photo">
                <img src="" alt="Forum hero" class="Hero-image" />
            </figure>
        </div>
    </section>
    <!-- /Hero -->

    <!-- Skills -->
    <ul class="Skills">
        <li class="SkillItem">
            <figure class="SkillItem-photo">
                <img class="SkillItem-image" src="" alt="Skill name" />
            </figure>

            <h2 class="SkillItem-title">
                <a href="/skills/1" class="SkillItem-link">{Skill title}</a>
            </h2>

            <span class="SkillItem-seriesCount">{Skill series count}</span>
            <span class="SkillItem-lessonsCount">{Skill lessons count}</span>
        </li>

        <li class="SkillItem">
            <figure class="SkillItem-photo">
                <img class="SkillItem-image" src="" alt="Skill name" />
            </figure>

            <h2 class="SkillItem-title">
                <a href="/skills/1" class="SkillItem-link">{Skill title}</a>
            </h2>

            <span class="SkillItem-seriesCount">{Skill series count}</span>
            <span class="SkillItem-lessonsCount">{Skill lessons count}</span>
        </li>

        <li class="SkillItem">
            <figure class="SkillItem-photo">
                <img class="SkillItem-image" src="" alt="Skill name" />
            </figure>

            <h2 class="SkillItem-title">
                <a href="/skills/1" class="SkillItem-link">{Skill title}</a>
            </h2>

            <span class="SkillItem-seriesCount">{Skill series count}</span>
            <span class="SkillItem-lessonsCount">{Skill lessons count}</span>
        </li>

        <li class="SkillItem">
            <figure class="SkillItem-photo">
                <img class="SkillItem-image" src="" alt="Skill name" />
            </figure>

            <h2 class="SkillItem-title">
                <a href="/skills/1" class="SkillItem-link">{Skill title}</a>
            </h2>

            <span class="SkillItem-seriesCount">{Skill series count}</span>
            <span class="SkillItem-lessonsCount">{Skill lessons count}</span>
        </li>

        <li class="SkillItem">
            <figure class="SkillItem-photo">
                <img class="SkillItem-image" src="" alt="Skill name" />
            </figure>

            <h2 class="SkillItem-title">
                <a href="/skills/1" class="SkillItem-link">{Skill title}</a>
            </h2>

            <span class="SkillItem-seriesCount">{Skill series count}</span>
            <span class="SkillItem-lessonsCount">{Skill lessons count}</span>
        </li>

    </ul>
    <!-- /Skills -->

    <!-- About -->
    <section class="About">
        <h2 class="About-heading">The most concise screencasts for the working developer, updated daily.</h2>
        <p class="About-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sapiente provident ad nisi sunt laboriosam, necessitatibus
            iusto qui perferendis similique, modi cupiditate repellat. Nam fugiat quis eaque, voluptatem vel ratione!
        </p>
    </section>
    <!-- /About -->

    <!-- ThreadGrid -->
    <section class="ThreadGrid">
        <article class="ThreadGrid-items">
            <article class="ThreadGridItem">
                <header class="ThreadGridItem-heading">
                    <a href="#" class="ThreadGridItem-skillLink">
                        <span class="ThreadGridItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadGridItem-body">
                    <h4 class="ThreadGridItem-title">
                        <a href="/threads/1" class="ThreadGridItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadGridItem-footer">
                    <div class="ThreadGridItem-info">
                        <span class="ThreadGridItem-count ThreadGridItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadGridItem-count ThreadGridItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadGridItem">
                <header class="ThreadGridItem-heading">
                    <a href="#" class="ThreadGridItem-skillLink">
                        <span class="ThreadGridItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadGridItem-body">
                    <h4 class="ThreadGridItem-title">
                        <a href="/threads/1" class="ThreadGridItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadGridItem-footer">
                    <div class="ThreadGridItem-info">
                        <span class="ThreadGridItem-count ThreadGridItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadGridItem-count ThreadGridItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadGridItem">
                <header class="ThreadGridItem-heading">
                    <a href="#" class="ThreadGridItem-skillLink">
                        <span class="ThreadGridItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadGridItem-body">
                    <h4 class="ThreadGridItem-title">
                        <a href="/threads/1" class="ThreadGridItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadGridItem-footer">
                    <div class="ThreadGridItem-info">
                        <span class="ThreadGridItem-count ThreadGridItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadGridItem-count ThreadGridItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadGridItem">
                <header class="ThreadGridItem-heading">
                    <a href="#" class="ThreadGridItem-skillLink">
                        <span class="ThreadGridItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadGridItem-body">
                    <h4 class="ThreadGridItem-title">
                        <a href="/threads/1" class="ThreadGridItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadGridItem-footer">
                    <div class="ThreadGridItem-info">
                        <span class="ThreadGridItem-count ThreadGridItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadGridItem-count ThreadGridItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadGridItem">
                <header class="ThreadGridItem-heading">
                    <a href="#" class="ThreadGridItem-skillLink">
                        <span class="ThreadGridItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadGridItem-body">
                    <h4 class="ThreadGridItem-title">
                        <a href="/threads/1" class="ThreadGridItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadGridItem-footer">
                    <div class="ThreadGridItem-info">
                        <span class="ThreadGridItem-count ThreadGridItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadGridItem-count ThreadGridItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadGridItem">
                <header class="ThreadGridItem-heading">
                    <a href="#" class="ThreadGridItem-skillLink">
                        <span class="ThreadGridItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadGridItem-body">
                    <h4 class="ThreadGridItem-title">
                        <a href="/threads/1" class="ThreadGridItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadGridItem-footer">
                    <div class="ThreadGridItem-info">
                        <span class="ThreadGridItem-count ThreadGridItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadGridItem-count ThreadGridItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadGridItem">
                <header class="ThreadGridItem-heading">
                    <a href="#" class="ThreadGridItem-skillLink">
                        <span class="ThreadGridItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadGridItem-body">
                    <h4 class="ThreadGridItem-title">
                        <a href="/threads/1" class="ThreadGridItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadGridItem-footer">
                    <div class="ThreadGridItem-info">
                        <span class="ThreadGridItem-count ThreadGridItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadGridItem-count ThreadGridItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadGridItem">
                <header class="ThreadGridItem-heading">
                    <a href="#" class="ThreadGridItem-skillLink">
                        <span class="ThreadGridItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadGridItem-body">
                    <h4 class="ThreadGridItem-title">
                        <a href="/threads/1" class="ThreadGridItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadGridItem-footer">
                    <div class="ThreadGridItem-info">
                        <span class="ThreadGridItem-count ThreadGridItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadGridItem-count ThreadGridItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

        </article>

        <a class="ThreadGrid-button" href="#" />> Show more
        </a>
        </a>
        <!-- /ThreadGrid -->
    </section>
    <!-- /ThreadGrid -->
@endsection