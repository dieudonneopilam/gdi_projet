<div class="content-comment">
    <div class="onglet">
        <span class="link-comment">commentaires</span>
        <span class="link-join">joindre</span>
    </div>
    <div class="content-all">

        <ul class="ul-comment">
            @forelse ($comments as $comment)
            <li class="block-comment">

                <p class="mail-comment">{{ $comment->mail }}</p>
                <p class="name-comment">{{ $comment->nom }} </p>
                <p class="name-comment">{{ $comment->created_at }} </p>
                <p class="comment-content">{{ $comment->comment }} </p>
            </li>
            @empty
            <p style="text-align: center;margin-top: 20px;color: red">Aucun commentaire envoyé</p>
            @endforelse
        </ul>
        <ul class="ul-join">
            @forelse ($joins as $join)
            <li class="block-join">
                <p class="mail-comment"> <strong>mail</strong> : <a
                        href="mailto:{{ $join->mail }}">{{ $join->mail }}</a></p>
                </p>
                <p class="name-comment"> <strong>nom</strong> :{{ $join->nom }} </p>
                <p class="name-comment"> <strong>niveau etude</strong> :{{ $join->niveau }} </p>
                <p class="name-comment"> <strong>date</strong> :{{ $join->created_at }} </p>
            </li>
            @empty
            <p>Aucune personne n'a rejoint</p>
            @endforelse
        </ul>
    </div>
</div>