<template>
    <form @submit.prevent="submit">


        <div class="row w-75 m-auto">
            <h1>Edit page</h1>
            <div class="col-md-6">
                <label for="title">Title</label>
                <input v-model="form.title" class="form-control" name="title" type="text">
            </div>
            <div class="col-md-6">
                <label for="slug">Slug</label>
                <input v-model="form.slug" class="form-control" name="slug" type="text">
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-12">
                <label for="icon">Icon</label>
                <select v-model="form.icon" aria-label="Icon" class="form-select" name="icon"
                        placeholder="Select an icon">
                    <option value="bi-123"><i class="bi-123"/>123</option>
                    <option value="bi-activity"><i class="bi-activity"/>activity</option>
                    <option value="bi-alarm"><i class="bi-alarm"/>alarm</option>
                    <option value="bi-alarm-fill"><i class="bi-alarm-fill"/>alarm-fill</option>
                    <option value="bi-align-bottom"><i class="bi-align-bottom"/>align-bottom</option>
                    <option value="bi-align-center"><i class="bi-align-center"/>align-center</option>
                    <option value="bi-align-end"><i class="bi-align-end"/>align-end</option>
                    <option value="bi-align-middle"><i class="bi-align-middle"/>align-middle</option>
                    <option value="bi-align-start"><i class="bi-align-start"/>align-start</option>
                    <option value="bi-align-top"><i class="bi-align-top"/>align-top</option>
                    <option value="bi-alt"><i class="bi-alt"/>alt</option>
                    <option value="bi-app"><i class="bi-app"/>app</option>
                    <option value="bi-app-indicator"><i class="bi-app-indicator"/>app-indicator</option>
                    <option value="bi-apple"><i class="bi-apple"/>apple</option>
                    <option value="bi-archive"><i class="bi-archive"/>archive</option>
                    <option value="bi-archive-fill"><i class="bi-archive-fill"/>archive-fill</option>
                    <option value="bi-arrow-90deg-down"><i class="bi-arrow-90deg-down"/>arrow-90deg-down</option>
                    <option value="bi-arrow-90deg-left"><i class="bi-arrow-90deg-left"/>arrow-90deg-left</option>
                    <option value="bi-arrow-90deg-right"><i class="bi-arrow-90deg-right"/>arrow-90deg-right</option>
                    <option value="bi-arrow-90deg-up"><i class="bi-arrow-90deg-up"/>arrow-90deg-up</option>
                    <option value="bi-arrow-bar-down"><i class="bi-arrow-bar-down"/>arrow-bar-down</option>
                    <option value="bi-arrow-bar-left"><i class="bi-arrow-bar-left"/>arrow-bar-left</option>
                    <option value="bi-arrow-bar-right"><i class="bi-arrow-bar-right"/>arrow-bar-right</option>
                    <option value="bi-arrow-bar-up"><i class="bi-arrow-bar-up"/>arrow-bar-up</option>
                    <option value="bi-arrow-clockwise"><i class="bi-arrow-clockwise"/>arrow-clockwise</option>
                    <option value="bi-arrow-counterclockwise"><i class="bi-arrow-counterclockwise"/>arrow-counterclockwise
                    </option>
                    <option value="bi-arrow-down"><i class="bi-arrow-down"/>arrow-down</option>
                    <option value="bi-arrow-down-circle"><i class="bi-arrow-down-circle"/>arrow-down-circle</option>
                    <option value="bi-arrow-down-circle-fill"><i class="bi-arrow-down-circle-fill"/>arrow-down-circle-fill
                    </option>
                    <option value="bi-arrow-down-left-circle"><i class="bi-arrow-down-left-circle"/>arrow-down-left-circle
                    </option>
                    <option value="bi-arrow-down-left-circle-fill"><i class="bi-arrow-down-left-circle-fill"/>arrow-down-left-circle-fill
                    </option>
                    <option value="bi-arrow-down-left-square"><i class="bi-arrow-down-left-square"/>arrow-down-left-square
                    </option>
                    <option value="bi-arrow-down-left-square-fill"><i class="bi-arrow-down-left-square-fill"/>arrow-down-left-square-fill
                    </option>
                    <option value="bi-arrow-down-right-circle"><i class="bi-arrow-down-right-circle"/>arrow-down-right-circle
                    </option>
                    <option value="bi-arrow-down-right-circle-fill"><i class="bi-arrow-down-right-circle-fill"/>arrow-down-right-circle-fill
                    </option>
                    <option value="bi-arrow-down-right-square"><i class="bi-arrow-down-right-square"/>arrow-down-right-square
                    </option>
                    <option value="bi-arrow-down-right-square-fill"><i class="bi-arrow-down-right-square-fill"/>arrow-down-right-square-fill
                    </option>
                    <option value="bi-arrow-down-square"><i class="bi-arrow-down-square"/>arrow-down-square</option>
                    <option value="bi-arrow-down-square-fill"><i class="bi-arrow-down-square-fill"/>arrow-down-square-fill
                    </option>
                    <option value="bi-arrow-down-left"><i class="bi-arrow-down-left"/>arrow-down-left</option>
                    <option value="bi-arrow-down-right"><i class="bi-arrow-down-right"/>arrow-down-right</option>
                    <option value="bi-arrow-down-short"><i class="bi-arrow-down-short"/>arrow-down-short</option>
                    <option value="bi-arrow-down-up"><i class="bi-arrow-down-up"/>arrow-down-up</option>
                    <option value="bi-arrow-left"><i class="bi-arrow-left"/>arrow-left</option>
                    <option value="bi-arrow-left-circle"><i class="bi-arrow-left-circle"/>arrow-left-circle</option>
                    <option value="bi-arrow-left-circle-fill"><i class="bi-arrow-left-circle-fill"/>arrow-left-circle-fill
                    </option>
                    <option value="bi-arrow-left-square"><i class="bi-arrow-left-square"/>arrow-left-square</option>
                    <option value="bi-arrow-left-square-fill"><i class="bi-arrow-left-square-fill"/>arrow-left-square-fill
                    </option>
                    <option value="bi-arrow-left-right"><i class="bi-arrow-left-right"/>arrow-left-right</option>
                    <option value="bi-arrow-left-short"><i class="bi-arrow-left-short"/>arrow-left-short</option>
                    <option value="bi-arrow-repeat"><i class="bi-arrow-repeat"/>arrow-repeat</option>
                    <option value="bi-arrow-return-left"><i class="bi-arrow-return-left"/>arrow-return-left</option>
                    <option value="bi-arrow-return-right"><i class="bi-arrow-return-right"/>arrow-return-right</option>
                    <option value="bi-arrow-right"><i class="bi-arrow-right"/>arrow-right</option>
                    <option value="bi-arrow-right-circle"><i class="bi-arrow-right-circle"/>arrow-right-circle</option>
                    <option value="bi-arrow-right-circle-fill"><i class="bi-arrow-right-circle-fill"/>arrow-right-circle-fill
                    </option>
                    <option value="bi-arrow-right-square"><i class="bi-arrow-right-square"/>arrow-right-square</option>
                    <option value="bi-arrow-right-square-fill"><i class="bi-arrow-right-square-fill"/>arrow-right-square-fill
                    </option>
                    <option value="bi-arrow-right-short"><i class="bi-arrow-right-short"/>arrow-right-short</option>
                    <option value="bi-arrow-through-heart"><i class="bi-arrow-through-heart"/>arrow-through-heart
                    </option>
                    <option value="bi-arrow-through-heart-fill"><i class="bi-arrow-through-heart-fill"/>arrow-through-heart-fill
                    </option>
                    <option value="bi-arrow-up"><i class="bi-arrow-up"/>arrow-up</option>
                    <option value="bi-arrow-up-circle"><i class="bi-arrow-up-circle"/>arrow-up-circle</option>
                    <option value="bi-arrow-up-circle-fill"><i class="bi-arrow-up-circle-fill"/>arrow-up-circle-fill
                    </option>
                    <option value="bi-arrow-up-left-circle"><i class="bi-arrow-up-left-circle"/>arrow-up-left-circle
                    </option>
                    <option value="bi-arrow-up-left-circle-fill"><i class="bi-arrow-up-left-circle-fill"/>arrow-up-left-circle-fill
                    </option>
                    <option value="bi-arrow-up-left-square"><i class="bi-arrow-up-left-square"/>arrow-up-left-square
                    </option>
                    <option value="bi-arrow-up-left-square-fill"><i class="bi-arrow-up-left-square-fill"/>arrow-up-left-square-fill
                    </option>
                    <option value="bi-arrow-up-right-circle"><i class="bi-arrow-up-right-circle"/>arrow-up-right-circle
                    </option>
                    <option value="bi-arrow-up-right-circle-fill"><i class="bi-arrow-up-right-circle-fill"/>arrow-up-right-circle-fill
                    </option>
                    <option value="bi-arrow-up-right-square"><i class="bi-arrow-up-right-square"/>arrow-up-right-square
                    </option>
                    <option value="bi-arrow-up-right-square-fill"><i class="bi-arrow-up-right-square-fill"/>arrow-up-right-square-fill
                    </option>
                    <option value="bi-arrow-up-square"><i class="bi-arrow-up-square"/>arrow-up-square</option>
                    <option value="bi-arrow-up-square-fill"><i class="bi-arrow-up-square-fill"/>arrow-up-square-fill
                    </option>
                    <option value="bi-arrow-up-left"><i class="bi-arrow-up-left"/>arrow-up-left</option>
                    <option value="bi-arrow-up-right"><i class="bi-arrow-up-right"/>arrow-up-right</option>
                    <option value="bi-arrow-up-short"><i class="bi-arrow-up-short"/>arrow-up-short</option>
                    <option value="bi-arrows-angle-contract"><i class="bi-arrows-angle-contract"/>arrows-angle-contract
                    </option>
                    <option value="bi-arrows-angle-expand"><i class="bi-arrows-angle-expand"/>arrows-angle-expand
                    </option>
                    <option value="bi-arrows-collapse"><i class="bi-arrows-collapse"/>arrows-collapse</option>
                    <option value="bi-arrows-expand"><i class="bi-arrows-expand"/>arrows-expand</option>
                    <option value="bi-arrows-fullscreen"><i class="bi-arrows-fullscreen"/>arrows-fullscreen</option>
                    <option value="bi-arrows-move"><i class="bi-arrows-move"/>arrows-move</option>
                    <option value="bi-aspect-ratio"><i class="bi-aspect-ratio"/>aspect-ratio</option>
                    <option value="bi-aspect-ratio-fill"><i class="bi-aspect-ratio-fill"/>aspect-ratio-fill</option>
                    <option value="bi-asterisk"><i class="bi-asterisk"/>asterisk</option>
                    <option value="bi-at"><i class="bi-at"/>at</option>
                    <option value="bi-award"><i class="bi-award"/>award</option>
                    <option value="bi-award-fill"><i class="bi-award-fill"/>award-fill</option>
                    <option value="bi-back"><i class="bi-back"/>back</option>
                    <option value="bi-backspace"><i class="bi-backspace"/>backspace</option>
                    <option value="bi-backspace-fill"><i class="bi-backspace-fill"/>backspace-fill</option>
                    <option value="bi-backspace-reverse"><i class="bi-backspace-reverse"/>backspace-reverse</option>
                    <option value="bi-backspace-reverse-fill"><i class="bi-backspace-reverse-fill"/>backspace-reverse-fill
                    </option>
                    <option value="bi-badge-3d"><i class="bi-badge-3d"/>badge-3d</option>
                    <option value="bi-badge-3d-fill"><i class="bi-badge-3d-fill"/>badge-3d-fill</option>
                    <option value="bi-badge-4k"><i class="bi-badge-4k"/>badge-4k</option>
                    <option value="bi-badge-4k-fill"><i class="bi-badge-4k-fill"/>badge-4k-fill</option>
                    <option value="bi-badge-8k"><i class="bi-badge-8k"/>badge-8k</option>
                    <option value="bi-badge-8k-fill"><i class="bi-badge-8k-fill"/>badge-8k-fill</option>
                    <option value="bi-badge-ad"><i class="bi-badge-ad"/>badge-ad</option>
                    <option value="bi-badge-ad-fill"><i class="bi-badge-ad-fill"/>badge-ad-fill</option>
                    <option value="bi-badge-ar"><i class="bi-badge-ar"/>badge-ar</option>
                    <option value="bi-badge-ar-fill"><i class="bi-badge-ar-fill"/>badge-ar-fill</option>
                    <option value="bi-badge-cc"><i class="bi-badge-cc"/>badge-cc</option>
                    <option value="bi-badge-cc-fill"><i class="bi-badge-cc-fill"/>badge-cc-fill</option>
                    <option value="bi-badge-hd"><i class="bi-badge-hd"/>badge-hd</option>
                    <option value="bi-badge-hd-fill"><i class="bi-badge-hd-fill"/>badge-hd-fill</option>
                    <option value="bi-badge-sd"><i class="bi-badge-sd"/>badge-sd</option>
                    <option value="bi-badge-sd-fill"><i class="bi-badge-sd-fill"/>badge-sd-fill</option>
                    <option value="bi-badge-tm"><i class="bi-badge-tm"/>badge-tm</option>
                    <option value="bi-badge-tm-fill"><i class="bi-badge-tm-fill"/>badge-tm-fill</option>
                    <option value="bi-badge-vo"><i class="bi-badge-vo"/>badge-vo</option>
                    <option value="bi-badge-vo-fill"><i class="bi-badge-vo-fill"/>badge-vo-fill</option>
                    <option value="bi-badge-vr"><i class="bi-badge-vr"/>badge-vr</option>
                    <option value="bi-badge-vr-fill"><i class="bi-badge-vr-fill"/>badge-vr-fill</option>
                    <option value="bi-badge-wc"><i class="bi-badge-wc"/>badge-wc</option>
                    <option value="bi-badge-wc-fill"><i class="bi-badge-wc-fill"/>badge-wc-fill</option>
                    <option value="bi-bag"><i class="bi-bag"/>bag</option>
                    <option value="bi-bag-check"><i class="bi-bag-check"/>bag-check</option>
                    <option value="bi-bag-check-fill"><i class="bi-bag-check-fill"/>bag-check-fill</option>
                    <option value="bi-bag-dash"><i class="bi-bag-dash"/>bag-dash</option>
                    <option value="bi-bag-dash-fill"><i class="bi-bag-dash-fill"/>bag-dash-fill</option>
                    <option value="bi-bag-fill"><i class="bi-bag-fill"/>bag-fill</option>
                    <option value="bi-bag-heart"><i class="bi-bag-heart"/>bag-heart</option>
                    <option value="bi-bag-heart-fill"><i class="bi-bag-heart-fill"/>bag-heart-fill</option>
                    <option value="bi-bag-plus"><i class="bi-bag-plus"/>bag-plus</option>
                    <option value="bi-bag-plus-fill"><i class="bi-bag-plus-fill"/>bag-plus-fill</option>
                    <option value="bi-bag-x"><i class="bi-bag-x"/>bag-x</option>
                    <option value="bi-bag-x-fill"><i class="bi-bag-x-fill"/>bag-x-fill</option>
                    <option value="bi-balloon"><i class="bi-balloon"/>balloon</option>
                    <option value="bi-balloon-fill"><i class="bi-balloon-fill"/>balloon-fill</option>
                    <option value="bi-balloon-heart"><i class="bi-balloon-heart"/>balloon-heart</option>
                    <option value="bi-balloon-heart-fill"><i class="bi-balloon-heart-fill"/>balloon-heart-fill</option>
                    <option value="bi-bandaid"><i class="bi-bandaid"/>bandaid</option>
                    <option value="bi-bandaid-fill"><i class="bi-bandaid-fill"/>bandaid-fill</option>
                    <option value="bi-bank"><i class="bi-bank"/>bank</option>
                    <option value="bi-bank2"><i class="bi-bank2"/>bank2</option>
                    <option value="bi-bar-chart"><i class="bi-bar-chart"/>bar-chart</option>
                    <option value="bi-bar-chart-fill"><i class="bi-bar-chart-fill"/>bar-chart-fill</option>
                    <option value="bi-bar-chart-line"><i class="bi-bar-chart-line"/>bar-chart-line</option>
                    <option value="bi-bar-chart-line-fill"><i class="bi-bar-chart-line-fill"/>bar-chart-line-fill
                    </option>
                    <option value="bi-bar-chart-steps"><i class="bi-bar-chart-steps"/>bar-chart-steps</option>
                    <option value="bi-basket"><i class="bi-basket"/>basket</option>
                    <option value="bi-basket-fill"><i class="bi-basket-fill"/>basket-fill</option>
                    <option value="bi-basket2"><i class="bi-basket2"/>basket2</option>
                    <option value="bi-basket2-fill"><i class="bi-basket2-fill"/>basket2-fill</option>
                    <option value="bi-basket3"><i class="bi-basket3"/>basket3</option>
                    <option value="bi-basket3-fill"><i class="bi-basket3-fill"/>basket3-fill</option>
                    <option value="bi-battery"><i class="bi-battery"/>battery</option>
                    <option value="bi-battery-charging"><i class="bi-battery-charging"/>battery-charging</option>
                    <option value="bi-battery-full"><i class="bi-battery-full"/>battery-full</option>
                    <option value="bi-battery-half"><i class="bi-battery-half"/>battery-half</option>
                    <option value="bi-behance"><i class="bi-behance"/>behance</option>
                    <option value="bi-bell"><i class="bi-bell"/>bell</option>
                    <option value="bi-bell-fill"><i class="bi-bell-fill"/>bell-fill</option>
                    <option value="bi-bell-slash"><i class="bi-bell-slash"/>bell-slash</option>
                    <option value="bi-bell-slash-fill"><i class="bi-bell-slash-fill"/>bell-slash-fill</option>
                    <option value="bi-bezier"><i class="bi-bezier"/>bezier</option>
                    <option value="bi-bezier2"><i class="bi-bezier2"/>bezier2</option>
                    <option value="bi-bicycle"><i class="bi-bicycle"/>bicycle</option>
                    <option value="bi-binoculars"><i class="bi-binoculars"/>binoculars</option>
                    <option value="bi-binoculars-fill"><i class="bi-binoculars-fill"/>binoculars-fill</option>
                    <option value="bi-blockquote-left"><i class="bi-blockquote-left"/>blockquote-left</option>
                    <option value="bi-blockquote-right"><i class="bi-blockquote-right"/>blockquote-right</option>
                    <option value="bi-bluetooth"><i class="bi-bluetooth"/>bluetooth</option>
                    <option value="bi-body-text"><i class="bi-body-text"/>body-text</option>
                    <option value="bi-book"><i class="bi-book"/>book</option>
                    <option value="bi-book-fill"><i class="bi-book-fill"/>book-fill</option>
                    <option value="bi-book-half"><i class="bi-book-half"/>book-half</option>
                    <option value="bi-bookmark"><i class="bi-bookmark"/>bookmark</option>
                    <option value="bi-bookmark-check"><i class="bi-bookmark-check"/>bookmark-check</option>
                    <option value="bi-bookmark-check-fill"><i class="bi-bookmark-check-fill"/>bookmark-check-fill
                    </option>
                    <option value="bi-bookmark-dash"><i class="bi-bookmark-dash"/>bookmark-dash</option>
                    <option value="bi-bookmark-dash-fill"><i class="bi-bookmark-dash-fill"/>bookmark-dash-fill</option>
                    <option value="bi-bookmark-fill"><i class="bi-bookmark-fill"/>bookmark-fill</option>
                    <option value="bi-bookmark-heart"><i class="bi-bookmark-heart"/>bookmark-heart</option>
                    <option value="bi-bookmark-heart-fill"><i class="bi-bookmark-heart-fill"/>bookmark-heart-fill
                    </option>
                    <option value="bi-bookmark-plus"><i class="bi-bookmark-plus"/>bookmark-plus</option>
                    <option value="bi-bookmark-plus-fill"><i class="bi-bookmark-plus-fill"/>bookmark-plus-fill</option>
                    <option value="bi-bookmark-star"><i class="bi-bookmark-star"/>bookmark-star</option>
                    <option value="bi-bookmark-star-fill"><i class="bi-bookmark-star-fill"/>bookmark-star-fill</option>
                    <option value="bi-bookmark-x"><i class="bi-bookmark-x"/>bookmark-x</option>
                    <option value="bi-bookmark-x-fill"><i class="bi-bookmark-x-fill"/>bookmark-x-fill</option>
                    <option value="bi-bookmarks"><i class="bi-bookmarks"/>bookmarks</option>
                    <option value="bi-bookmarks-fill"><i class="bi-bookmarks-fill"/>bookmarks-fill</option>
                    <option value="bi-bookshelf"><i class="bi-bookshelf"/>bookshelf</option>
                    <option value="bi-boombox"><i class="bi-boombox"/>boombox</option>
                    <option value="bi-boombox-fill"><i class="bi-boombox-fill"/>boombox-fill</option>
                    <option value="bi-bootstrap"><i class="bi-bootstrap"/>bootstrap</option>
                    <option value="bi-bootstrap-fill"><i class="bi-bootstrap-fill"/>bootstrap-fill</option>
                    <option value="bi-bootstrap-reboot"><i class="bi-bootstrap-reboot"/>bootstrap-reboot</option>
                    <option value="bi-border"><i class="bi-border"/>border</option>
                    <option value="bi-border-all"><i class="bi-border-all"/>border-all</option>
                    <option value="bi-border-bottom"><i class="bi-border-bottom"/>border-bottom</option>
                    <option value="bi-border-center"><i class="bi-border-center"/>border-center</option>
                    <option value="bi-border-inner"><i class="bi-border-inner"/>border-inner</option>
                    <option value="bi-border-left"><i class="bi-border-left"/>border-left</option>
                    <option value="bi-border-middle"><i class="bi-border-middle"/>border-middle</option>
                    <option value="bi-border-outer"><i class="bi-border-outer"/>border-outer</option>
                    <option value="bi-border-right"><i class="bi-border-right"/>border-right</option>
                    <option value="bi-border-style"><i class="bi-border-style"/>border-style</option>
                    <option value="bi-border-top"><i class="bi-border-top"/>border-top</option>
                    <option value="bi-border-width"><i class="bi-border-width"/>border-width</option>
                    <option value="bi-bounding-box"><i class="bi-bounding-box"/>bounding-box</option>
                    <option value="bi-bounding-box-circles"><i class="bi-bounding-box-circles"/>bounding-box-circles
                    </option>
                    <option value="bi-box"><i class="bi-box"/>box</option>
                    <option value="bi-box-arrow-down-left"><i class="bi-box-arrow-down-left"/>box-arrow-down-left
                    </option>
                    <option value="bi-box-arrow-down-right"><i class="bi-box-arrow-down-right"/>box-arrow-down-right
                    </option>
                    <option value="bi-box-arrow-down"><i class="bi-box-arrow-down"/>box-arrow-down</option>
                    <option value="bi-box-arrow-in-down"><i class="bi-box-arrow-in-down"/>box-arrow-in-down</option>
                    <option value="bi-box-arrow-in-down-left"><i class="bi-box-arrow-in-down-left"/>box-arrow-in-down-left
                    </option>
                    <option value="bi-box-arrow-in-down-right"><i class="bi-box-arrow-in-down-right"/>box-arrow-in-down-right
                    </option>
                    <option value="bi-box-arrow-in-left"><i class="bi-box-arrow-in-left"/>box-arrow-in-left</option>
                    <option value="bi-box-arrow-in-right"><i class="bi-box-arrow-in-right"/>box-arrow-in-right</option>
                    <option value="bi-box-arrow-in-up"><i class="bi-box-arrow-in-up"/>box-arrow-in-up</option>
                    <option value="bi-box-arrow-in-up-left"><i class="bi-box-arrow-in-up-left"/>box-arrow-in-up-left
                    </option>
                    <option value="bi-box-arrow-in-up-right"><i class="bi-box-arrow-in-up-right"/>box-arrow-in-up-right
                    </option>
                    <option value="bi-box-arrow-left"><i class="bi-box-arrow-left"/>box-arrow-left</option>
                    <option value="bi-box-arrow-right"><i class="bi-box-arrow-right"/>box-arrow-right</option>
                    <option value="bi-box-arrow-up"><i class="bi-box-arrow-up"/>box-arrow-up</option>
                    <option value="bi-box-arrow-up-left"><i class="bi-box-arrow-up-left"/>box-arrow-up-left</option>
                    <option value="bi-box-arrow-up-right"><i class="bi-box-arrow-up-right"/>box-arrow-up-right</option>
                    <option value="bi-box-seam"><i class="bi-box-seam"/>box-seam</option>
                    <option value="bi-box2"><i class="bi-box2"/>box2</option>
                    <option value="bi-box2-fill"><i class="bi-box2-fill"/>box2-fill</option>
                    <option value="bi-box2-heart"><i class="bi-box2-heart"/>box2-heart</option>
                    <option value="bi-box2-heart-fill"><i class="bi-box2-heart-fill"/>box2-heart-fill</option>
                    <option value="bi-boxes"><i class="bi-boxes"/>boxes</option>
                    <option value="bi-braces"><i class="bi-braces"/>braces</option>
                    <option value="bi-braces-asterisk"><i class="bi-braces-asterisk"/>braces-asterisk</option>
                    <option value="bi-bricks"><i class="bi-bricks"/>bricks</option>
                    <option value="bi-briefcase"><i class="bi-briefcase"/>briefcase</option>
                    <option value="bi-briefcase-fill"><i class="bi-briefcase-fill"/>briefcase-fill</option>
                    <option value="bi-brightness-alt-high"><i class="bi-brightness-alt-high"/>brightness-alt-high
                    </option>
                    <option value="bi-brightness-alt-high-fill"><i class="bi-brightness-alt-high-fill"/>brightness-alt-high-fill
                    </option>
                    <option value="bi-brightness-alt-low"><i class="bi-brightness-alt-low"/>brightness-alt-low</option>
                    <option value="bi-brightness-alt-low-fill"><i class="bi-brightness-alt-low-fill"/>brightness-alt-low-fill
                    </option>
                    <option value="bi-brightness-high"><i class="bi-brightness-high"/>brightness-high</option>
                    <option value="bi-brightness-high-fill"><i class="bi-brightness-high-fill"/>brightness-high-fill
                    </option>
                    <option value="bi-brightness-low"><i class="bi-brightness-low"/>brightness-low</option>
                    <option value="bi-brightness-low-fill"><i class="bi-brightness-low-fill"/>brightness-low-fill
                    </option>
                    <option value="bi-broadcast"><i class="bi-broadcast"/>broadcast</option>
                    <option value="bi-broadcast-pin"><i class="bi-broadcast-pin"/>broadcast-pin</option>
                    <option value="bi-brush"><i class="bi-brush"/>brush</option>
                    <option value="bi-brush-fill"><i class="bi-brush-fill"/>brush-fill</option>
                    <option value="bi-bucket"><i class="bi-bucket"/>bucket</option>
                    <option value="bi-bucket-fill"><i class="bi-bucket-fill"/>bucket-fill</option>
                    <option value="bi-bug"><i class="bi-bug"/>bug</option>
                    <option value="bi-bug-fill"><i class="bi-bug-fill"/>bug-fill</option>
                    <option value="bi-building"><i class="bi-building"/>building</option>
                    <option value="bi-bullseye"><i class="bi-bullseye"/>bullseye</option>
                    <option value="bi-calculator"><i class="bi-calculator"/>calculator</option>
                    <option value="bi-calculator-fill"><i class="bi-calculator-fill"/>calculator-fill</option>
                    <option value="bi-calendar"><i class="bi-calendar"/>calendar</option>
                    <option value="bi-calendar-check"><i class="bi-calendar-check"/>calendar-check</option>
                    <option value="bi-calendar-check-fill"><i class="bi-calendar-check-fill"/>calendar-check-fill
                    </option>
                    <option value="bi-calendar-date"><i class="bi-calendar-date"/>calendar-date</option>
                    <option value="bi-calendar-date-fill"><i class="bi-calendar-date-fill"/>calendar-date-fill</option>
                    <option value="bi-calendar-day"><i class="bi-calendar-day"/>calendar-day</option>
                    <option value="bi-calendar-day-fill"><i class="bi-calendar-day-fill"/>calendar-day-fill</option>
                    <option value="bi-calendar-event"><i class="bi-calendar-event"/>calendar-event</option>
                    <option value="bi-calendar-event-fill"><i class="bi-calendar-event-fill"/>calendar-event-fill
                    </option>
                    <option value="bi-calendar-fill"><i class="bi-calendar-fill"/>calendar-fill</option>
                    <option value="bi-calendar-heart"><i class="bi-calendar-heart"/>calendar-heart</option>
                    <option value="bi-calendar-heart-fill"><i class="bi-calendar-heart-fill"/>calendar-heart-fill
                    </option>
                    <option value="bi-calendar-minus"><i class="bi-calendar-minus"/>calendar-minus</option>
                    <option value="bi-calendar-minus-fill"><i class="bi-calendar-minus-fill"/>calendar-minus-fill
                    </option>
                    <option value="bi-calendar-month"><i class="bi-calendar-month"/>calendar-month</option>
                    <option value="bi-calendar-month-fill"><i class="bi-calendar-month-fill"/>calendar-month-fill
                    </option>
                    <option value="bi-calendar-plus"><i class="bi-calendar-plus"/>calendar-plus</option>
                    <option value="bi-calendar-plus-fill"><i class="bi-calendar-plus-fill"/>calendar-plus-fill</option>
                    <option value="bi-calendar-range"><i class="bi-calendar-range"/>calendar-range</option>
                    <option value="bi-calendar-range-fill"><i class="bi-calendar-range-fill"/>calendar-range-fill
                    </option>
                    <option value="bi-calendar-week"><i class="bi-calendar-week"/>calendar-week</option>
                    <option value="bi-calendar-week-fill"><i class="bi-calendar-week-fill"/>calendar-week-fill</option>
                    <option value="bi-calendar-x"><i class="bi-calendar-x"/>calendar-x</option>
                    <option value="bi-calendar-x-fill"><i class="bi-calendar-x-fill"/>calendar-x-fill</option>
                    <option value="bi-calendar2"><i class="bi-calendar2"/>calendar2</option>
                    <option value="bi-calendar2-check"><i class="bi-calendar2-check"/>calendar2-check</option>
                    <option value="bi-calendar2-check-fill"><i class="bi-calendar2-check-fill"/>calendar2-check-fill
                    </option>
                    <option value="bi-calendar2-date"><i class="bi-calendar2-date"/>calendar2-date</option>
                    <option value="bi-calendar2-date-fill"><i class="bi-calendar2-date-fill"/>calendar2-date-fill
                    </option>
                    <option value="bi-calendar2-day"><i class="bi-calendar2-day"/>calendar2-day</option>
                    <option value="bi-calendar2-day-fill"><i class="bi-calendar2-day-fill"/>calendar2-day-fill</option>
                    <option value="bi-calendar2-event"><i class="bi-calendar2-event"/>calendar2-event</option>
                    <option value="bi-calendar2-event-fill"><i class="bi-calendar2-event-fill"/>calendar2-event-fill
                    </option>
                    <option value="bi-calendar2-fill"><i class="bi-calendar2-fill"/>calendar2-fill</option>
                    <option value="bi-calendar2-heart"><i class="bi-calendar2-heart"/>calendar2-heart</option>
                    <option value="bi-calendar2-heart-fill"><i class="bi-calendar2-heart-fill"/>calendar2-heart-fill
                    </option>
                    <option value="bi-calendar2-minus"><i class="bi-calendar2-minus"/>calendar2-minus</option>
                    <option value="bi-calendar2-minus-fill"><i class="bi-calendar2-minus-fill"/>calendar2-minus-fill
                    </option>
                    <option value="bi-calendar2-month"><i class="bi-calendar2-month"/>calendar2-month</option>
                    <option value="bi-calendar2-month-fill"><i class="bi-calendar2-month-fill"/>calendar2-month-fill
                    </option>
                    <option value="bi-calendar2-plus"><i class="bi-calendar2-plus"/>calendar2-plus</option>
                    <option value="bi-calendar2-plus-fill"><i class="bi-calendar2-plus-fill"/>calendar2-plus-fill
                    </option>
                    <option value="bi-calendar2-range"><i class="bi-calendar2-range"/>calendar2-range</option>
                    <option value="bi-calendar2-range-fill"><i class="bi-calendar2-range-fill"/>calendar2-range-fill
                    </option>
                    <option value="bi-calendar2-week"><i class="bi-calendar2-week"/>calendar2-week</option>
                    <option value="bi-calendar2-week-fill"><i class="bi-calendar2-week-fill"/>calendar2-week-fill
                    </option>
                    <option value="bi-calendar2-x"><i class="bi-calendar2-x"/>calendar2-x</option>
                    <option value="bi-calendar2-x-fill"><i class="bi-calendar2-x-fill"/>calendar2-x-fill</option>
                    <option value="bi-calendar3"><i class="bi-calendar3"/>calendar3</option>
                    <option value="bi-calendar3-event"><i class="bi-calendar3-event"/>calendar3-event</option>
                    <option value="bi-calendar3-event-fill"><i class="bi-calendar3-event-fill"/>calendar3-event-fill
                    </option>
                    <option value="bi-calendar3-fill"><i class="bi-calendar3-fill"/>calendar3-fill</option>
                    <option value="bi-calendar3-range"><i class="bi-calendar3-range"/>calendar3-range</option>
                    <option value="bi-calendar3-range-fill"><i class="bi-calendar3-range-fill"/>calendar3-range-fill
                    </option>
                    <option value="bi-calendar3-week"><i class="bi-calendar3-week"/>calendar3-week</option>
                    <option value="bi-calendar3-week-fill"><i class="bi-calendar3-week-fill"/>calendar3-week-fill
                    </option>
                    <option value="bi-calendar4"><i class="bi-calendar4"/>calendar4</option>
                    <option value="bi-calendar4-event"><i class="bi-calendar4-event"/>calendar4-event</option>
                    <option value="bi-calendar4-range"><i class="bi-calendar4-range"/>calendar4-range</option>
                    <option value="bi-calendar4-week"><i class="bi-calendar4-week"/>calendar4-week</option>
                    <option value="bi-camera"><i class="bi-camera"/>camera</option>
                    <option value="bi-camera2"><i class="bi-camera2"/>camera2</option>
                    <option value="bi-camera-fill"><i class="bi-camera-fill"/>camera-fill</option>
                    <option value="bi-camera-reels"><i class="bi-camera-reels"/>camera-reels</option>
                    <option value="bi-camera-reels-fill"><i class="bi-camera-reels-fill"/>camera-reels-fill</option>
                    <option value="bi-camera-video"><i class="bi-camera-video"/>camera-video</option>
                    <option value="bi-camera-video-fill"><i class="bi-camera-video-fill"/>camera-video-fill</option>
                    <option value="bi-camera-video-off"><i class="bi-camera-video-off"/>camera-video-off</option>
                    <option value="bi-camera-video-off-fill"><i class="bi-camera-video-off-fill"/>camera-video-off-fill
                    </option>
                    <option value="bi-capslock"><i class="bi-capslock"/>capslock</option>
                    <option value="bi-capslock-fill"><i class="bi-capslock-fill"/>capslock-fill</option>
                    <option value="bi-card-checklist"><i class="bi-card-checklist"/>card-checklist</option>
                    <option value="bi-card-heading"><i class="bi-card-heading"/>card-heading</option>
                    <option value="bi-card-image"><i class="bi-card-image"/>card-image</option>
                    <option value="bi-card-list"><i class="bi-card-list"/>card-list</option>
                    <option value="bi-card-text"><i class="bi-card-text"/>card-text</option>
                    <option value="bi-caret-down"><i class="bi-caret-down"/>caret-down</option>
                    <option value="bi-caret-down-fill"><i class="bi-caret-down-fill"/>caret-down-fill</option>
                    <option value="bi-caret-down-square"><i class="bi-caret-down-square"/>caret-down-square</option>
                    <option value="bi-caret-down-square-fill"><i class="bi-caret-down-square-fill"/>caret-down-square-fill
                    </option>
                    <option value="bi-caret-left"><i class="bi-caret-left"/>caret-left</option>
                    <option value="bi-caret-left-fill"><i class="bi-caret-left-fill"/>caret-left-fill</option>
                    <option value="bi-caret-left-square"><i class="bi-caret-left-square"/>caret-left-square</option>
                    <option value="bi-caret-left-square-fill"><i class="bi-caret-left-square-fill"/>caret-left-square-fill
                    </option>
                    <option value="bi-caret-right"><i class="bi-caret-right"/>caret-right</option>
                    <option value="bi-caret-right-fill"><i class="bi-caret-right-fill"/>caret-right-fill</option>
                    <option value="bi-caret-right-square"><i class="bi-caret-right-square"/>caret-right-square</option>
                    <option value="bi-caret-right-square-fill"><i class="bi-caret-right-square-fill"/>caret-right-square-fill
                    </option>
                    <option value="bi-caret-up"><i class="bi-caret-up"/>caret-up</option>
                    <option value="bi-caret-up-fill"><i class="bi-caret-up-fill"/>caret-up-fill</option>
                    <option value="bi-caret-up-square"><i class="bi-caret-up-square"/>caret-up-square</option>
                    <option value="bi-caret-up-square-fill"><i class="bi-caret-up-square-fill"/>caret-up-square-fill
                    </option>
                    <option value="bi-cart"><i class="bi-cart"/>cart</option>
                    <option value="bi-cart-check"><i class="bi-cart-check"/>cart-check</option>
                    <option value="bi-cart-check-fill"><i class="bi-cart-check-fill"/>cart-check-fill</option>
                    <option value="bi-cart-dash"><i class="bi-cart-dash"/>cart-dash</option>
                    <option value="bi-cart-dash-fill"><i class="bi-cart-dash-fill"/>cart-dash-fill</option>
                    <option value="bi-cart-fill"><i class="bi-cart-fill"/>cart-fill</option>
                    <option value="bi-cart-plus"><i class="bi-cart-plus"/>cart-plus</option>
                    <option value="bi-cart-plus-fill"><i class="bi-cart-plus-fill"/>cart-plus-fill</option>
                    <option value="bi-cart-x"><i class="bi-cart-x"/>cart-x</option>
                    <option value="bi-cart-x-fill"><i class="bi-cart-x-fill"/>cart-x-fill</option>
                    <option value="bi-cart2"><i class="bi-cart2"/>cart2</option>
                    <option value="bi-cart3"><i class="bi-cart3"/>cart3</option>
                    <option value="bi-cart4"><i class="bi-cart4"/>cart4</option>
                    <option value="bi-cash"><i class="bi-cash"/>cash</option>
                    <option value="bi-cash-coin"><i class="bi-cash-coin"/>cash-coin</option>
                    <option value="bi-cash-stack"><i class="bi-cash-stack"/>cash-stack</option>
                    <option value="bi-cast"><i class="bi-cast"/>cast</option>
                    <option value="bi-chat"><i class="bi-chat"/>chat</option>
                    <option value="bi-chat-dots"><i class="bi-chat-dots"/>chat-dots</option>
                    <option value="bi-chat-dots-fill"><i class="bi-chat-dots-fill"/>chat-dots-fill</option>
                    <option value="bi-chat-fill"><i class="bi-chat-fill"/>chat-fill</option>
                    <option value="bi-chat-heart"><i class="bi-chat-heart"/>chat-heart</option>
                    <option value="bi-chat-heart-fill"><i class="bi-chat-heart-fill"/>chat-heart-fill</option>
                    <option value="bi-chat-left"><i class="bi-chat-left"/>chat-left</option>
                    <option value="bi-chat-left-dots"><i class="bi-chat-left-dots"/>chat-left-dots</option>
                    <option value="bi-chat-left-dots-fill"><i class="bi-chat-left-dots-fill"/>chat-left-dots-fill
                    </option>
                    <option value="bi-chat-left-fill"><i class="bi-chat-left-fill"/>chat-left-fill</option>
                    <option value="bi-chat-left-heart"><i class="bi-chat-left-heart"/>chat-left-heart</option>
                    <option value="bi-chat-left-heart-fill"><i class="bi-chat-left-heart-fill"/>chat-left-heart-fill
                    </option>
                    <option value="bi-chat-left-quote"><i class="bi-chat-left-quote"/>chat-left-quote</option>
                    <option value="bi-chat-left-quote-fill"><i class="bi-chat-left-quote-fill"/>chat-left-quote-fill
                    </option>
                    <option value="bi-chat-left-text"><i class="bi-chat-left-text"/>chat-left-text</option>
                    <option value="bi-chat-left-text-fill"><i class="bi-chat-left-text-fill"/>chat-left-text-fill
                    </option>
                    <option value="bi-chat-quote"><i class="bi-chat-quote"/>chat-quote</option>
                    <option value="bi-chat-quote-fill"><i class="bi-chat-quote-fill"/>chat-quote-fill</option>
                    <option value="bi-chat-right"><i class="bi-chat-right"/>chat-right</option>
                    <option value="bi-chat-right-dots"><i class="bi-chat-right-dots"/>chat-right-dots</option>
                    <option value="bi-chat-right-dots-fill"><i class="bi-chat-right-dots-fill"/>chat-right-dots-fill
                    </option>
                    <option value="bi-chat-right-fill"><i class="bi-chat-right-fill"/>chat-right-fill</option>
                    <option value="bi-chat-right-heart"><i class="bi-chat-right-heart"/>chat-right-heart</option>
                    <option value="bi-chat-right-heart-fill"><i class="bi-chat-right-heart-fill"/>chat-right-heart-fill
                    </option>
                    <option value="bi-chat-right-quote"><i class="bi-chat-right-quote"/>chat-right-quote</option>
                    <option value="bi-chat-right-quote-fill"><i class="bi-chat-right-quote-fill"/>chat-right-quote-fill
                    </option>
                    <option value="bi-chat-right-text"><i class="bi-chat-right-text"/>chat-right-text</option>
                    <option value="bi-chat-right-text-fill"><i class="bi-chat-right-text-fill"/>chat-right-text-fill
                    </option>
                    <option value="bi-chat-square"><i class="bi-chat-square"/>chat-square</option>
                    <option value="bi-chat-square-dots"><i class="bi-chat-square-dots"/>chat-square-dots</option>
                    <option value="bi-chat-square-dots-fill"><i class="bi-chat-square-dots-fill"/>chat-square-dots-fill
                    </option>
                    <option value="bi-chat-square-fill"><i class="bi-chat-square-fill"/>chat-square-fill</option>
                    <option value="bi-chat-square-heart"><i class="bi-chat-square-heart"/>chat-square-heart</option>
                    <option value="bi-chat-square-heart-fill"><i class="bi-chat-square-heart-fill"/>chat-square-heart-fill
                    </option>
                    <option value="bi-chat-square-quote"><i class="bi-chat-square-quote"/>chat-square-quote</option>
                    <option value="bi-chat-square-quote-fill"><i class="bi-chat-square-quote-fill"/>chat-square-quote-fill
                    </option>
                    <option value="bi-chat-square-text"><i class="bi-chat-square-text"/>chat-square-text</option>
                    <option value="bi-chat-square-text-fill"><i class="bi-chat-square-text-fill"/>chat-square-text-fill
                    </option>
                    <option value="bi-chat-text"><i class="bi-chat-text"/>chat-text</option>
                    <option value="bi-chat-text-fill"><i class="bi-chat-text-fill"/>chat-text-fill</option>
                    <option value="bi-check"><i class="bi-check"/>check</option>
                    <option value="bi-check-all"><i class="bi-check-all"/>check-all</option>
                    <option value="bi-check-circle"><i class="bi-check-circle"/>check-circle</option>
                    <option value="bi-check-circle-fill"><i class="bi-check-circle-fill"/>check-circle-fill</option>
                    <option value="bi-check-lg"><i class="bi-check-lg"/>check-lg</option>
                    <option value="bi-check-square"><i class="bi-check-square"/>check-square</option>
                    <option value="bi-check-square-fill"><i class="bi-check-square-fill"/>check-square-fill</option>
                    <option value="bi-check2"><i class="bi-check2"/>check2</option>
                    <option value="bi-check2-all"><i class="bi-check2-all"/>check2-all</option>
                    <option value="bi-check2-circle"><i class="bi-check2-circle"/>check2-circle</option>
                    <option value="bi-check2-square"><i class="bi-check2-square"/>check2-square</option>
                    <option value="bi-chevron-bar-contract"><i class="bi-chevron-bar-contract"/>chevron-bar-contract
                    </option>
                    <option value="bi-chevron-bar-down"><i class="bi-chevron-bar-down"/>chevron-bar-down</option>
                    <option value="bi-chevron-bar-expand"><i class="bi-chevron-bar-expand"/>chevron-bar-expand</option>
                    <option value="bi-chevron-bar-left"><i class="bi-chevron-bar-left"/>chevron-bar-left</option>
                    <option value="bi-chevron-bar-right"><i class="bi-chevron-bar-right"/>chevron-bar-right</option>
                    <option value="bi-chevron-bar-up"><i class="bi-chevron-bar-up"/>chevron-bar-up</option>
                    <option value="bi-chevron-compact-down"><i class="bi-chevron-compact-down"/>chevron-compact-down
                    </option>
                    <option value="bi-chevron-compact-left"><i class="bi-chevron-compact-left"/>chevron-compact-left
                    </option>
                    <option value="bi-chevron-compact-right"><i class="bi-chevron-compact-right"/>chevron-compact-right
                    </option>
                    <option value="bi-chevron-compact-up"><i class="bi-chevron-compact-up"/>chevron-compact-up</option>
                    <option value="bi-chevron-contract"><i class="bi-chevron-contract"/>chevron-contract</option>
                    <option value="bi-chevron-double-down"><i class="bi-chevron-double-down"/>chevron-double-down
                    </option>
                    <option value="bi-chevron-double-left"><i class="bi-chevron-double-left"/>chevron-double-left
                    </option>
                    <option value="bi-chevron-double-right"><i class="bi-chevron-double-right"/>chevron-double-right
                    </option>
                    <option value="bi-chevron-double-up"><i class="bi-chevron-double-up"/>chevron-double-up</option>
                    <option value="bi-chevron-down"><i class="bi-chevron-down"/>chevron-down</option>
                    <option value="bi-chevron-expand"><i class="bi-chevron-expand"/>chevron-expand</option>
                    <option value="bi-chevron-left"><i class="bi-chevron-left"/>chevron-left</option>
                    <option value="bi-chevron-right"><i class="bi-chevron-right"/>chevron-right</option>
                    <option value="bi-chevron-up"><i class="bi-chevron-up"/>chevron-up</option>
                    <option value="bi-circle"><i class="bi-circle"/>circle</option>
                    <option value="bi-circle-fill"><i class="bi-circle-fill"/>circle-fill</option>
                    <option value="bi-circle-half"><i class="bi-circle-half"/>circle-half</option>
                    <option value="bi-slash-circle"><i class="bi-slash-circle"/>slash-circle</option>
                    <option value="bi-circle-square"><i class="bi-circle-square"/>circle-square</option>
                    <option value="bi-clipboard"><i class="bi-clipboard"/>clipboard</option>
                    <option value="bi-clipboard-check"><i class="bi-clipboard-check"/>clipboard-check</option>
                    <option value="bi-clipboard-check-fill"><i class="bi-clipboard-check-fill"/>clipboard-check-fill
                    </option>
                    <option value="bi-clipboard-data"><i class="bi-clipboard-data"/>clipboard-data</option>
                    <option value="bi-clipboard-data-fill"><i class="bi-clipboard-data-fill"/>clipboard-data-fill
                    </option>
                    <option value="bi-clipboard-fill"><i class="bi-clipboard-fill"/>clipboard-fill</option>
                    <option value="bi-clipboard-heart"><i class="bi-clipboard-heart"/>clipboard-heart</option>
                    <option value="bi-clipboard-heart-fill"><i class="bi-clipboard-heart-fill"/>clipboard-heart-fill
                    </option>
                    <option value="bi-clipboard-minus"><i class="bi-clipboard-minus"/>clipboard-minus</option>
                    <option value="bi-clipboard-minus-fill"><i class="bi-clipboard-minus-fill"/>clipboard-minus-fill
                    </option>
                    <option value="bi-clipboard-plus"><i class="bi-clipboard-plus"/>clipboard-plus</option>
                    <option value="bi-clipboard-plus-fill"><i class="bi-clipboard-plus-fill"/>clipboard-plus-fill
                    </option>
                    <option value="bi-clipboard-pulse"><i class="bi-clipboard-pulse"/>clipboard-pulse</option>
                    <option value="bi-clipboard-x"><i class="bi-clipboard-x"/>clipboard-x</option>
                    <option value="bi-clipboard-x-fill"><i class="bi-clipboard-x-fill"/>clipboard-x-fill</option>
                    <option value="bi-clipboard2"><i class="bi-clipboard2"/>clipboard2</option>
                    <option value="bi-clipboard2-check"><i class="bi-clipboard2-check"/>clipboard2-check</option>
                    <option value="bi-clipboard2-check-fill"><i class="bi-clipboard2-check-fill"/>clipboard2-check-fill
                    </option>
                    <option value="bi-clipboard2-data"><i class="bi-clipboard2-data"/>clipboard2-data</option>
                    <option value="bi-clipboard2-data-fill"><i class="bi-clipboard2-data-fill"/>clipboard2-data-fill
                    </option>
                    <option value="bi-clipboard2-fill"><i class="bi-clipboard2-fill"/>clipboard2-fill</option>
                    <option value="bi-clipboard2-heart"><i class="bi-clipboard2-heart"/>clipboard2-heart</option>
                    <option value="bi-clipboard2-heart-fill"><i class="bi-clipboard2-heart-fill"/>clipboard2-heart-fill
                    </option>
                    <option value="bi-clipboard2-minus"><i class="bi-clipboard2-minus"/>clipboard2-minus</option>
                    <option value="bi-clipboard2-minus-fill"><i class="bi-clipboard2-minus-fill"/>clipboard2-minus-fill
                    </option>
                    <option value="bi-clipboard2-plus"><i class="bi-clipboard2-plus"/>clipboard2-plus</option>
                    <option value="bi-clipboard2-plus-fill"><i class="bi-clipboard2-plus-fill"/>clipboard2-plus-fill
                    </option>
                    <option value="bi-clipboard2-pulse"><i class="bi-clipboard2-pulse"/>clipboard2-pulse</option>
                    <option value="bi-clipboard2-pulse-fill"><i class="bi-clipboard2-pulse-fill"/>clipboard2-pulse-fill
                    </option>
                    <option value="bi-clipboard2-x"><i class="bi-clipboard2-x"/>clipboard2-x</option>
                    <option value="bi-clipboard2-x-fill"><i class="bi-clipboard2-x-fill"/>clipboard2-x-fill</option>
                    <option value="bi-clock"><i class="bi-clock"/>clock</option>
                    <option value="bi-clock-fill"><i class="bi-clock-fill"/>clock-fill</option>
                    <option value="bi-clock-history"><i class="bi-clock-history"/>clock-history</option>
                    <option value="bi-cloud"><i class="bi-cloud"/>cloud</option>
                    <option value="bi-cloud-arrow-down"><i class="bi-cloud-arrow-down"/>cloud-arrow-down</option>
                    <option value="bi-cloud-arrow-down-fill"><i class="bi-cloud-arrow-down-fill"/>cloud-arrow-down-fill
                    </option>
                    <option value="bi-cloud-arrow-up"><i class="bi-cloud-arrow-up"/>cloud-arrow-up</option>
                    <option value="bi-cloud-arrow-up-fill"><i class="bi-cloud-arrow-up-fill"/>cloud-arrow-up-fill
                    </option>
                    <option value="bi-cloud-check"><i class="bi-cloud-check"/>cloud-check</option>
                    <option value="bi-cloud-check-fill"><i class="bi-cloud-check-fill"/>cloud-check-fill</option>
                    <option value="bi-cloud-download"><i class="bi-cloud-download"/>cloud-download</option>
                    <option value="bi-cloud-download-fill"><i class="bi-cloud-download-fill"/>cloud-download-fill
                    </option>
                    <option value="bi-cloud-drizzle"><i class="bi-cloud-drizzle"/>cloud-drizzle</option>
                    <option value="bi-cloud-drizzle-fill"><i class="bi-cloud-drizzle-fill"/>cloud-drizzle-fill</option>
                    <option value="bi-cloud-fill"><i class="bi-cloud-fill"/>cloud-fill</option>
                    <option value="bi-cloud-fog"><i class="bi-cloud-fog"/>cloud-fog</option>
                    <option value="bi-cloud-fog-fill"><i class="bi-cloud-fog-fill"/>cloud-fog-fill</option>
                    <option value="bi-cloud-fog2"><i class="bi-cloud-fog2"/>cloud-fog2</option>
                    <option value="bi-cloud-fog2-fill"><i class="bi-cloud-fog2-fill"/>cloud-fog2-fill</option>
                    <option value="bi-cloud-hail"><i class="bi-cloud-hail"/>cloud-hail</option>
                    <option value="bi-cloud-hail-fill"><i class="bi-cloud-hail-fill"/>cloud-hail-fill</option>
                    <option value="bi-cloud-haze"><i class="bi-cloud-haze"/>cloud-haze</option>
                    <option value="bi-cloud-haze-fill"><i class="bi-cloud-haze-fill"/>cloud-haze-fill</option>
                    <option value="bi-cloud-haze2"><i class="bi-cloud-haze2"/>cloud-haze2</option>
                    <option value="bi-cloud-haze2-fill"><i class="bi-cloud-haze2-fill"/>cloud-haze2-fill</option>
                    <option value="bi-cloud-lightning"><i class="bi-cloud-lightning"/>cloud-lightning</option>
                    <option value="bi-cloud-lightning-fill"><i class="bi-cloud-lightning-fill"/>cloud-lightning-fill
                    </option>
                    <option value="bi-cloud-lightning-rain"><i class="bi-cloud-lightning-rain"/>cloud-lightning-rain
                    </option>
                    <option value="bi-cloud-lightning-rain-fill"><i class="bi-cloud-lightning-rain-fill"/>cloud-lightning-rain-fill
                    </option>
                    <option value="bi-cloud-minus"><i class="bi-cloud-minus"/>cloud-minus</option>
                    <option value="bi-cloud-minus-fill"><i class="bi-cloud-minus-fill"/>cloud-minus-fill</option>
                    <option value="bi-cloud-moon"><i class="bi-cloud-moon"/>cloud-moon</option>
                    <option value="bi-cloud-moon-fill"><i class="bi-cloud-moon-fill"/>cloud-moon-fill</option>
                    <option value="bi-cloud-plus"><i class="bi-cloud-plus"/>cloud-plus</option>
                    <option value="bi-cloud-plus-fill"><i class="bi-cloud-plus-fill"/>cloud-plus-fill</option>
                    <option value="bi-cloud-rain"><i class="bi-cloud-rain"/>cloud-rain</option>
                    <option value="bi-cloud-rain-fill"><i class="bi-cloud-rain-fill"/>cloud-rain-fill</option>
                    <option value="bi-cloud-rain-heavy"><i class="bi-cloud-rain-heavy"/>cloud-rain-heavy</option>
                    <option value="bi-cloud-rain-heavy-fill"><i class="bi-cloud-rain-heavy-fill"/>cloud-rain-heavy-fill
                    </option>
                    <option value="bi-cloud-slash"><i class="bi-cloud-slash"/>cloud-slash</option>
                    <option value="bi-cloud-slash-fill"><i class="bi-cloud-slash-fill"/>cloud-slash-fill</option>
                    <option value="bi-cloud-sleet"><i class="bi-cloud-sleet"/>cloud-sleet</option>
                    <option value="bi-cloud-sleet-fill"><i class="bi-cloud-sleet-fill"/>cloud-sleet-fill</option>
                    <option value="bi-cloud-snow"><i class="bi-cloud-snow"/>cloud-snow</option>
                    <option value="bi-cloud-snow-fill"><i class="bi-cloud-snow-fill"/>cloud-snow-fill</option>
                    <option value="bi-cloud-sun"><i class="bi-cloud-sun"/>cloud-sun</option>
                    <option value="bi-cloud-sun-fill"><i class="bi-cloud-sun-fill"/>cloud-sun-fill</option>
                    <option value="bi-cloud-upload"><i class="bi-cloud-upload"/>cloud-upload</option>
                    <option value="bi-cloud-upload-fill"><i class="bi-cloud-upload-fill"/>cloud-upload-fill</option>
                    <option value="bi-clouds"><i class="bi-clouds"/>clouds</option>
                    <option value="bi-clouds-fill"><i class="bi-clouds-fill"/>clouds-fill</option>
                    <option value="bi-cloudy"><i class="bi-cloudy"/>cloudy</option>
                    <option value="bi-cloudy-fill"><i class="bi-cloudy-fill"/>cloudy-fill</option>
                    <option value="bi-code"><i class="bi-code"/>code</option>
                    <option value="bi-code-slash"><i class="bi-code-slash"/>code-slash</option>
                    <option value="bi-code-square"><i class="bi-code-square"/>code-square</option>
                    <option value="bi-coin"><i class="bi-coin"/>coin</option>
                    <option value="bi-collection"><i class="bi-collection"/>collection</option>
                    <option value="bi-collection-fill"><i class="bi-collection-fill"/>collection-fill</option>
                    <option value="bi-collection-play"><i class="bi-collection-play"/>collection-play</option>
                    <option value="bi-collection-play-fill"><i class="bi-collection-play-fill"/>collection-play-fill
                    </option>
                    <option value="bi-columns"><i class="bi-columns"/>columns</option>
                    <option value="bi-columns-gap"><i class="bi-columns-gap"/>columns-gap</option>
                    <option value="bi-command"><i class="bi-command"/>command</option>
                    <option value="bi-compass"><i class="bi-compass"/>compass</option>
                    <option value="bi-compass-fill"><i class="bi-compass-fill"/>compass-fill</option>
                    <option value="bi-cone"><i class="bi-cone"/>cone</option>
                    <option value="bi-cone-striped"><i class="bi-cone-striped"/>cone-striped</option>
                    <option value="bi-controller"><i class="bi-controller"/>controller</option>
                    <option value="bi-cpu"><i class="bi-cpu"/>cpu</option>
                    <option value="bi-cpu-fill"><i class="bi-cpu-fill"/>cpu-fill</option>
                    <option value="bi-credit-card"><i class="bi-credit-card"/>credit-card</option>
                    <option value="bi-credit-card-2-back"><i class="bi-credit-card-2-back"/>credit-card-2-back</option>
                    <option value="bi-credit-card-2-back-fill"><i class="bi-credit-card-2-back-fill"/>credit-card-2-back-fill
                    </option>
                    <option value="bi-credit-card-2-front"><i class="bi-credit-card-2-front"/>credit-card-2-front
                    </option>
                    <option value="bi-credit-card-2-front-fill"><i class="bi-credit-card-2-front-fill"/>credit-card-2-front-fill
                    </option>
                    <option value="bi-credit-card-fill"><i class="bi-credit-card-fill"/>credit-card-fill</option>
                    <option value="bi-crop"><i class="bi-crop"/>crop</option>
                    <option value="bi-cup"><i class="bi-cup"/>cup</option>
                    <option value="bi-cup-fill"><i class="bi-cup-fill"/>cup-fill</option>
                    <option value="bi-cup-straw"><i class="bi-cup-straw"/>cup-straw</option>
                    <option value="bi-currency-bitcoin"><i class="bi-currency-bitcoin"/>currency-bitcoin</option>
                    <option value="bi-currency-dollar"><i class="bi-currency-dollar"/>currency-dollar</option>
                    <option value="bi-currency-euro"><i class="bi-currency-euro"/>currency-euro</option>
                    <option value="bi-currency-exchange"><i class="bi-currency-exchange"/>currency-exchange</option>
                    <option value="bi-currency-pound"><i class="bi-currency-pound"/>currency-pound</option>
                    <option value="bi-currency-yen"><i class="bi-currency-yen"/>currency-yen</option>
                    <option value="bi-cursor"><i class="bi-cursor"/>cursor</option>
                    <option value="bi-cursor-fill"><i class="bi-cursor-fill"/>cursor-fill</option>
                    <option value="bi-cursor-text"><i class="bi-cursor-text"/>cursor-text</option>
                    <option value="bi-dash"><i class="bi-dash"/>dash</option>
                    <option value="bi-dash-circle"><i class="bi-dash-circle"/>dash-circle</option>
                    <option value="bi-dash-circle-dotted"><i class="bi-dash-circle-dotted"/>dash-circle-dotted</option>
                    <option value="bi-dash-circle-fill"><i class="bi-dash-circle-fill"/>dash-circle-fill</option>
                    <option value="bi-dash-lg"><i class="bi-dash-lg"/>dash-lg</option>
                    <option value="bi-dash-square"><i class="bi-dash-square"/>dash-square</option>
                    <option value="bi-dash-square-dotted"><i class="bi-dash-square-dotted"/>dash-square-dotted</option>
                    <option value="bi-dash-square-fill"><i class="bi-dash-square-fill"/>dash-square-fill</option>
                    <option value="bi-device-hdd"><i class="bi-device-hdd"/>device-hdd</option>
                    <option value="bi-device-hdd-fill"><i class="bi-device-hdd-fill"/>device-hdd-fill</option>
                    <option value="bi-device-ssd"><i class="bi-device-ssd"/>device-ssd</option>
                    <option value="bi-device-ssd-fill"><i class="bi-device-ssd-fill"/>device-ssd-fill</option>
                    <option value="bi-diagram-2"><i class="bi-diagram-2"/>diagram-2</option>
                    <option value="bi-diagram-2-fill"><i class="bi-diagram-2-fill"/>diagram-2-fill</option>
                    <option value="bi-diagram-3"><i class="bi-diagram-3"/>diagram-3</option>
                    <option value="bi-diagram-3-fill"><i class="bi-diagram-3-fill"/>diagram-3-fill</option>
                    <option value="bi-diamond"><i class="bi-diamond"/>diamond</option>
                    <option value="bi-diamond-fill"><i class="bi-diamond-fill"/>diamond-fill</option>
                    <option value="bi-diamond-half"><i class="bi-diamond-half"/>diamond-half</option>
                    <option value="bi-dice-1"><i class="bi-dice-1"/>dice-1</option>
                    <option value="bi-dice-1-fill"><i class="bi-dice-1-fill"/>dice-1-fill</option>
                    <option value="bi-dice-2"><i class="bi-dice-2"/>dice-2</option>
                    <option value="bi-dice-2-fill"><i class="bi-dice-2-fill"/>dice-2-fill</option>
                    <option value="bi-dice-3"><i class="bi-dice-3"/>dice-3</option>
                    <option value="bi-dice-3-fill"><i class="bi-dice-3-fill"/>dice-3-fill</option>
                    <option value="bi-dice-4"><i class="bi-dice-4"/>dice-4</option>
                    <option value="bi-dice-4-fill"><i class="bi-dice-4-fill"/>dice-4-fill</option>
                    <option value="bi-dice-5"><i class="bi-dice-5"/>dice-5</option>
                    <option value="bi-dice-5-fill"><i class="bi-dice-5-fill"/>dice-5-fill</option>
                    <option value="bi-dice-6"><i class="bi-dice-6"/>dice-6</option>
                    <option value="bi-dice-6-fill"><i class="bi-dice-6-fill"/>dice-6-fill</option>
                    <option value="bi-disc"><i class="bi-disc"/>disc</option>
                    <option value="bi-disc-fill"><i class="bi-disc-fill"/>disc-fill</option>
                    <option value="bi-discord"><i class="bi-discord"/>discord</option>
                    <option value="bi-display"><i class="bi-display"/>display</option>
                    <option value="bi-display-fill"><i class="bi-display-fill"/>display-fill</option>
                    <option value="bi-displayport"><i class="bi-displayport"/>displayport</option>
                    <option value="bi-displayport-fill"><i class="bi-displayport-fill"/>displayport-fill</option>
                    <option value="bi-distribute-horizontal"><i class="bi-distribute-horizontal"/>distribute-horizontal
                    </option>
                    <option value="bi-distribute-vertical"><i class="bi-distribute-vertical"/>distribute-vertical
                    </option>
                    <option value="bi-door-closed"><i class="bi-door-closed"/>door-closed</option>
                    <option value="bi-door-closed-fill"><i class="bi-door-closed-fill"/>door-closed-fill</option>
                    <option value="bi-door-open"><i class="bi-door-open"/>door-open</option>
                    <option value="bi-door-open-fill"><i class="bi-door-open-fill"/>door-open-fill</option>
                    <option value="bi-dot"><i class="bi-dot"/>dot</option>
                    <option value="bi-download"><i class="bi-download"/>download</option>
                    <option value="bi-dpad"><i class="bi-dpad"/>dpad</option>
                    <option value="bi-dpad-fill"><i class="bi-dpad-fill"/>dpad-fill</option>
                    <option value="bi-dribbble"><i class="bi-dribbble"/>dribbble</option>
                    <option value="bi-droplet"><i class="bi-droplet"/>droplet</option>
                    <option value="bi-droplet-fill"><i class="bi-droplet-fill"/>droplet-fill</option>
                    <option value="bi-droplet-half"><i class="bi-droplet-half"/>droplet-half</option>
                    <option value="bi-ear"><i class="bi-ear"/>ear</option>
                    <option value="bi-ear-fill"><i class="bi-ear-fill"/>ear-fill</option>
                    <option value="bi-earbuds"><i class="bi-earbuds"/>earbuds</option>
                    <option value="bi-easel"><i class="bi-easel"/>easel</option>
                    <option value="bi-easel-fill"><i class="bi-easel-fill"/>easel-fill</option>
                    <option value="bi-easel2"><i class="bi-easel2"/>easel2</option>
                    <option value="bi-easel2-fill"><i class="bi-easel2-fill"/>easel2-fill</option>
                    <option value="bi-easel3"><i class="bi-easel3"/>easel3</option>
                    <option value="bi-easel3-fill"><i class="bi-easel3-fill"/>easel3-fill</option>
                    <option value="bi-egg"><i class="bi-egg"/>egg</option>
                    <option value="bi-egg-fill"><i class="bi-egg-fill"/>egg-fill</option>
                    <option value="bi-egg-fried"><i class="bi-egg-fried"/>egg-fried</option>
                    <option value="bi-eject"><i class="bi-eject"/>eject</option>
                    <option value="bi-eject-fill"><i class="bi-eject-fill"/>eject-fill</option>
                    <option value="bi-emoji-angry"><i class="bi-emoji-angry"/>emoji-angry</option>
                    <option value="bi-emoji-angry-fill"><i class="bi-emoji-angry-fill"/>emoji-angry-fill</option>
                    <option value="bi-emoji-dizzy"><i class="bi-emoji-dizzy"/>emoji-dizzy</option>
                    <option value="bi-emoji-dizzy-fill"><i class="bi-emoji-dizzy-fill"/>emoji-dizzy-fill</option>
                    <option value="bi-emoji-expressionless"><i class="bi-emoji-expressionless"/>emoji-expressionless
                    </option>
                    <option value="bi-emoji-expressionless-fill"><i class="bi-emoji-expressionless-fill"/>emoji-expressionless-fill
                    </option>
                    <option value="bi-emoji-frown"><i class="bi-emoji-frown"/>emoji-frown</option>
                    <option value="bi-emoji-frown-fill"><i class="bi-emoji-frown-fill"/>emoji-frown-fill</option>
                    <option value="bi-emoji-heart-eyes"><i class="bi-emoji-heart-eyes"/>emoji-heart-eyes</option>
                    <option value="bi-emoji-heart-eyes-fill"><i class="bi-emoji-heart-eyes-fill"/>emoji-heart-eyes-fill
                    </option>
                    <option value="bi-emoji-kiss"><i class="bi-emoji-kiss"/>emoji-kiss</option>
                    <option value="bi-emoji-kiss-fill"><i class="bi-emoji-kiss-fill"/>emoji-kiss-fill</option>
                    <option value="bi-emoji-laughing"><i class="bi-emoji-laughing"/>emoji-laughing</option>
                    <option value="bi-emoji-laughing-fill"><i class="bi-emoji-laughing-fill"/>emoji-laughing-fill
                    </option>
                    <option value="bi-emoji-neutral"><i class="bi-emoji-neutral"/>emoji-neutral</option>
                    <option value="bi-emoji-neutral-fill"><i class="bi-emoji-neutral-fill"/>emoji-neutral-fill</option>
                    <option value="bi-emoji-smile"><i class="bi-emoji-smile"/>emoji-smile</option>
                    <option value="bi-emoji-smile-fill"><i class="bi-emoji-smile-fill"/>emoji-smile-fill</option>
                    <option value="bi-emoji-smile-upside-down"><i class="bi-emoji-smile-upside-down"/>emoji-smile-upside-down
                    </option>
                    <option value="bi-emoji-smile-upside-down-fill"><i class="bi-emoji-smile-upside-down-fill"/>emoji-smile-upside-down-fill
                    </option>
                    <option value="bi-emoji-sunglasses"><i class="bi-emoji-sunglasses"/>emoji-sunglasses</option>
                    <option value="bi-emoji-sunglasses-fill"><i class="bi-emoji-sunglasses-fill"/>emoji-sunglasses-fill
                    </option>
                    <option value="bi-emoji-wink"><i class="bi-emoji-wink"/>emoji-wink</option>
                    <option value="bi-emoji-wink-fill"><i class="bi-emoji-wink-fill"/>emoji-wink-fill</option>
                    <option value="bi-envelope"><i class="bi-envelope"/>envelope</option>
                    <option value="bi-envelope-check"><i class="bi-envelope-check"/>envelope-check</option>
                    <option value="bi-envelope-check-fill"><i class="bi-envelope-check-fill"/>envelope-check-fill
                    </option>
                    <option value="bi-envelope-dash"><i class="bi-envelope-dash"/>envelope-dash</option>
                    <option value="bi-envelope-dash-fill"><i class="bi-envelope-dash-fill"/>envelope-dash-fill</option>
                    <option value="bi-envelope-exclamation"><i class="bi-envelope-exclamation"/>envelope-exclamation
                    </option>
                    <option value="bi-envelope-exclamation-fill"><i class="bi-envelope-exclamation-fill"/>envelope-exclamation-fill
                    </option>
                    <option value="bi-envelope-fill"><i class="bi-envelope-fill"/>envelope-fill</option>
                    <option value="bi-envelope-heart"><i class="bi-envelope-heart"/>envelope-heart</option>
                    <option value="bi-envelope-heart-fill"><i class="bi-envelope-heart-fill"/>envelope-heart-fill
                    </option>
                    <option value="bi-envelope-open"><i class="bi-envelope-open"/>envelope-open</option>
                    <option value="bi-envelope-open-fill"><i class="bi-envelope-open-fill"/>envelope-open-fill</option>
                    <option value="bi-envelope-open-heart"><i class="bi-envelope-open-heart"/>envelope-open-heart
                    </option>
                    <option value="bi-envelope-open-heart-fill"><i class="bi-envelope-open-heart-fill"/>envelope-open-heart-fill
                    </option>
                    <option value="bi-envelope-paper"><i class="bi-envelope-paper"/>envelope-paper</option>
                    <option value="bi-envelope-paper-fill"><i class="bi-envelope-paper-fill"/>envelope-paper-fill
                    </option>
                    <option value="bi-envelope-paper-heart"><i class="bi-envelope-paper-heart"/>envelope-paper-heart
                    </option>
                    <option value="bi-envelope-paper-heart-fill"><i class="bi-envelope-paper-heart-fill"/>envelope-paper-heart-fill
                    </option>
                    <option value="bi-envelope-plus"><i class="bi-envelope-plus"/>envelope-plus</option>
                    <option value="bi-envelope-plus-fill"><i class="bi-envelope-plus-fill"/>envelope-plus-fill</option>
                    <option value="bi-envelope-slash"><i class="bi-envelope-slash"/>envelope-slash</option>
                    <option value="bi-envelope-slash-fill"><i class="bi-envelope-slash-fill"/>envelope-slash-fill
                    </option>
                    <option value="bi-envelope-x"><i class="bi-envelope-x"/>envelope-x</option>
                    <option value="bi-envelope-x-fill"><i class="bi-envelope-x-fill"/>envelope-x-fill</option>
                    <option value="bi-eraser"><i class="bi-eraser"/>eraser</option>
                    <option value="bi-eraser-fill"><i class="bi-eraser-fill"/>eraser-fill</option>
                    <option value="bi-ethernet"><i class="bi-ethernet"/>ethernet</option>
                    <option value="bi-exclamation"><i class="bi-exclamation"/>exclamation</option>
                    <option value="bi-exclamation-circle"><i class="bi-exclamation-circle"/>exclamation-circle</option>
                    <option value="bi-exclamation-circle-fill"><i class="bi-exclamation-circle-fill"/>exclamation-circle-fill
                    </option>
                    <option value="bi-exclamation-diamond"><i class="bi-exclamation-diamond"/>exclamation-diamond
                    </option>
                    <option value="bi-exclamation-diamond-fill"><i class="bi-exclamation-diamond-fill"/>exclamation-diamond-fill
                    </option>
                    <option value="bi-exclamation-lg"><i class="bi-exclamation-lg"/>exclamation-lg</option>
                    <option value="bi-exclamation-octagon"><i class="bi-exclamation-octagon"/>exclamation-octagon
                    </option>
                    <option value="bi-exclamation-octagon-fill"><i class="bi-exclamation-octagon-fill"/>exclamation-octagon-fill
                    </option>
                    <option value="bi-exclamation-square"><i class="bi-exclamation-square"/>exclamation-square</option>
                    <option value="bi-exclamation-square-fill"><i class="bi-exclamation-square-fill"/>exclamation-square-fill
                    </option>
                    <option value="bi-exclamation-triangle"><i class="bi-exclamation-triangle"/>exclamation-triangle
                    </option>
                    <option value="bi-exclamation-triangle-fill"><i class="bi-exclamation-triangle-fill"/>exclamation-triangle-fill
                    </option>
                    <option value="bi-exclude"><i class="bi-exclude"/>exclude</option>
                    <option value="bi-explicit"><i class="bi-explicit"/>explicit</option>
                    <option value="bi-explicit-fill"><i class="bi-explicit-fill"/>explicit-fill</option>
                    <option value="bi-eye"><i class="bi-eye"/>eye</option>
                    <option value="bi-eye-fill"><i class="bi-eye-fill"/>eye-fill</option>
                    <option value="bi-eye-slash"><i class="bi-eye-slash"/>eye-slash</option>
                    <option value="bi-eye-slash-fill"><i class="bi-eye-slash-fill"/>eye-slash-fill</option>
                    <option value="bi-eyedropper"><i class="bi-eyedropper"/>eyedropper</option>
                    <option value="bi-eyeglasses"><i class="bi-eyeglasses"/>eyeglasses</option>
                    <option value="bi-facebook"><i class="bi-facebook"/>facebook</option>
                    <option value="bi-fan"><i class="bi-fan"/>fan</option>
                    <option value="bi-file"><i class="bi-file"/>file</option>
                    <option value="bi-file-arrow-down"><i class="bi-file-arrow-down"/>file-arrow-down</option>
                    <option value="bi-file-arrow-down-fill"><i class="bi-file-arrow-down-fill"/>file-arrow-down-fill
                    </option>
                    <option value="bi-file-arrow-up"><i class="bi-file-arrow-up"/>file-arrow-up</option>
                    <option value="bi-file-arrow-up-fill"><i class="bi-file-arrow-up-fill"/>file-arrow-up-fill</option>
                    <option value="bi-file-bar-graph"><i class="bi-file-bar-graph"/>file-bar-graph</option>
                    <option value="bi-file-bar-graph-fill"><i class="bi-file-bar-graph-fill"/>file-bar-graph-fill
                    </option>
                    <option value="bi-file-binary"><i class="bi-file-binary"/>file-binary</option>
                    <option value="bi-file-binary-fill"><i class="bi-file-binary-fill"/>file-binary-fill</option>
                    <option value="bi-file-break"><i class="bi-file-break"/>file-break</option>
                    <option value="bi-file-break-fill"><i class="bi-file-break-fill"/>file-break-fill</option>
                    <option value="bi-file-check"><i class="bi-file-check"/>file-check</option>
                    <option value="bi-file-check-fill"><i class="bi-file-check-fill"/>file-check-fill</option>
                    <option value="bi-file-code"><i class="bi-file-code"/>file-code</option>
                    <option value="bi-file-code-fill"><i class="bi-file-code-fill"/>file-code-fill</option>
                    <option value="bi-file-diff"><i class="bi-file-diff"/>file-diff</option>
                    <option value="bi-file-diff-fill"><i class="bi-file-diff-fill"/>file-diff-fill</option>
                    <option value="bi-file-earmark"><i class="bi-file-earmark"/>file-earmark</option>
                    <option value="bi-file-earmark-arrow-down"><i class="bi-file-earmark-arrow-down"/>file-earmark-arrow-down
                    </option>
                    <option value="bi-file-earmark-arrow-down-fill"><i class="bi-file-earmark-arrow-down-fill"/>file-earmark-arrow-down-fill
                    </option>
                    <option value="bi-file-earmark-arrow-up"><i class="bi-file-earmark-arrow-up"/>file-earmark-arrow-up
                    </option>
                    <option value="bi-file-earmark-arrow-up-fill"><i class="bi-file-earmark-arrow-up-fill"/>file-earmark-arrow-up-fill
                    </option>
                    <option value="bi-file-earmark-bar-graph"><i class="bi-file-earmark-bar-graph"/>file-earmark-bar-graph
                    </option>
                    <option value="bi-file-earmark-bar-graph-fill"><i class="bi-file-earmark-bar-graph-fill"/>file-earmark-bar-graph-fill
                    </option>
                    <option value="bi-file-earmark-binary"><i class="bi-file-earmark-binary"/>file-earmark-binary
                    </option>
                    <option value="bi-file-earmark-binary-fill"><i class="bi-file-earmark-binary-fill"/>file-earmark-binary-fill
                    </option>
                    <option value="bi-file-earmark-break"><i class="bi-file-earmark-break"/>file-earmark-break</option>
                    <option value="bi-file-earmark-break-fill"><i class="bi-file-earmark-break-fill"/>file-earmark-break-fill
                    </option>
                    <option value="bi-file-earmark-check"><i class="bi-file-earmark-check"/>file-earmark-check</option>
                    <option value="bi-file-earmark-check-fill"><i class="bi-file-earmark-check-fill"/>file-earmark-check-fill
                    </option>
                    <option value="bi-file-earmark-code"><i class="bi-file-earmark-code"/>file-earmark-code</option>
                    <option value="bi-file-earmark-code-fill"><i class="bi-file-earmark-code-fill"/>file-earmark-code-fill
                    </option>
                    <option value="bi-file-earmark-diff"><i class="bi-file-earmark-diff"/>file-earmark-diff</option>
                    <option value="bi-file-earmark-diff-fill"><i class="bi-file-earmark-diff-fill"/>file-earmark-diff-fill
                    </option>
                    <option value="bi-file-earmark-easel"><i class="bi-file-earmark-easel"/>file-earmark-easel</option>
                    <option value="bi-file-earmark-easel-fill"><i class="bi-file-earmark-easel-fill"/>file-earmark-easel-fill
                    </option>
                    <option value="bi-file-earmark-excel"><i class="bi-file-earmark-excel"/>file-earmark-excel</option>
                    <option value="bi-file-earmark-excel-fill"><i class="bi-file-earmark-excel-fill"/>file-earmark-excel-fill
                    </option>
                    <option value="bi-file-earmark-fill"><i class="bi-file-earmark-fill"/>file-earmark-fill</option>
                    <option value="bi-file-earmark-font"><i class="bi-file-earmark-font"/>file-earmark-font</option>
                    <option value="bi-file-earmark-font-fill"><i class="bi-file-earmark-font-fill"/>file-earmark-font-fill
                    </option>
                    <option value="bi-file-earmark-image"><i class="bi-file-earmark-image"/>file-earmark-image</option>
                    <option value="bi-file-earmark-image-fill"><i class="bi-file-earmark-image-fill"/>file-earmark-image-fill
                    </option>
                    <option value="bi-file-earmark-lock"><i class="bi-file-earmark-lock"/>file-earmark-lock</option>
                    <option value="bi-file-earmark-lock-fill"><i class="bi-file-earmark-lock-fill"/>file-earmark-lock-fill
                    </option>
                    <option value="bi-file-earmark-lock2"><i class="bi-file-earmark-lock2"/>file-earmark-lock2</option>
                    <option value="bi-file-earmark-lock2-fill"><i class="bi-file-earmark-lock2-fill"/>file-earmark-lock2-fill
                    </option>
                    <option value="bi-file-earmark-medical"><i class="bi-file-earmark-medical"/>file-earmark-medical
                    </option>
                    <option value="bi-file-earmark-medical-fill"><i class="bi-file-earmark-medical-fill"/>file-earmark-medical-fill
                    </option>
                    <option value="bi-file-earmark-minus"><i class="bi-file-earmark-minus"/>file-earmark-minus</option>
                    <option value="bi-file-earmark-minus-fill"><i class="bi-file-earmark-minus-fill"/>file-earmark-minus-fill
                    </option>
                    <option value="bi-file-earmark-music"><i class="bi-file-earmark-music"/>file-earmark-music</option>
                    <option value="bi-file-earmark-music-fill"><i class="bi-file-earmark-music-fill"/>file-earmark-music-fill
                    </option>
                    <option value="bi-file-earmark-pdf"><i class="bi-file-earmark-pdf"/>file-earmark-pdf</option>
                    <option value="bi-file-earmark-pdf-fill"><i class="bi-file-earmark-pdf-fill"/>file-earmark-pdf-fill
                    </option>
                    <option value="bi-file-earmark-person"><i class="bi-file-earmark-person"/>file-earmark-person
                    </option>
                    <option value="bi-file-earmark-person-fill"><i class="bi-file-earmark-person-fill"/>file-earmark-person-fill
                    </option>
                    <option value="bi-file-earmark-play"><i class="bi-file-earmark-play"/>file-earmark-play</option>
                    <option value="bi-file-earmark-play-fill"><i class="bi-file-earmark-play-fill"/>file-earmark-play-fill
                    </option>
                    <option value="bi-file-earmark-plus"><i class="bi-file-earmark-plus"/>file-earmark-plus</option>
                    <option value="bi-file-earmark-plus-fill"><i class="bi-file-earmark-plus-fill"/>file-earmark-plus-fill
                    </option>
                    <option value="bi-file-earmark-post"><i class="bi-file-earmark-post"/>file-earmark-post</option>
                    <option value="bi-file-earmark-post-fill"><i class="bi-file-earmark-post-fill"/>file-earmark-post-fill
                    </option>
                    <option value="bi-file-earmark-ppt"><i class="bi-file-earmark-ppt"/>file-earmark-ppt</option>
                    <option value="bi-file-earmark-ppt-fill"><i class="bi-file-earmark-ppt-fill"/>file-earmark-ppt-fill
                    </option>
                    <option value="bi-file-earmark-richtext"><i class="bi-file-earmark-richtext"/>file-earmark-richtext
                    </option>
                    <option value="bi-file-earmark-richtext-fill"><i class="bi-file-earmark-richtext-fill"/>file-earmark-richtext-fill
                    </option>
                    <option value="bi-file-earmark-ruled"><i class="bi-file-earmark-ruled"/>file-earmark-ruled</option>
                    <option value="bi-file-earmark-ruled-fill"><i class="bi-file-earmark-ruled-fill"/>file-earmark-ruled-fill
                    </option>
                    <option value="bi-file-earmark-slides"><i class="bi-file-earmark-slides"/>file-earmark-slides
                    </option>
                    <option value="bi-file-earmark-slides-fill"><i class="bi-file-earmark-slides-fill"/>file-earmark-slides-fill
                    </option>
                    <option value="bi-file-earmark-spreadsheet"><i class="bi-file-earmark-spreadsheet"/>file-earmark-spreadsheet
                    </option>
                    <option value="bi-file-earmark-spreadsheet-fill"><i class="bi-file-earmark-spreadsheet-fill"/>file-earmark-spreadsheet-fill
                    </option>
                    <option value="bi-file-earmark-text"><i class="bi-file-earmark-text"/>file-earmark-text</option>
                    <option value="bi-file-earmark-text-fill"><i class="bi-file-earmark-text-fill"/>file-earmark-text-fill
                    </option>
                    <option value="bi-file-earmark-word"><i class="bi-file-earmark-word"/>file-earmark-word</option>
                    <option value="bi-file-earmark-word-fill"><i class="bi-file-earmark-word-fill"/>file-earmark-word-fill
                    </option>
                    <option value="bi-file-earmark-x"><i class="bi-file-earmark-x"/>file-earmark-x</option>
                    <option value="bi-file-earmark-x-fill"><i class="bi-file-earmark-x-fill"/>file-earmark-x-fill
                    </option>
                    <option value="bi-file-earmark-zip"><i class="bi-file-earmark-zip"/>file-earmark-zip</option>
                    <option value="bi-file-earmark-zip-fill"><i class="bi-file-earmark-zip-fill"/>file-earmark-zip-fill
                    </option>
                    <option value="bi-file-easel"><i class="bi-file-easel"/>file-easel</option>
                    <option value="bi-file-easel-fill"><i class="bi-file-easel-fill"/>file-easel-fill</option>
                    <option value="bi-file-excel"><i class="bi-file-excel"/>file-excel</option>
                    <option value="bi-file-excel-fill"><i class="bi-file-excel-fill"/>file-excel-fill</option>
                    <option value="bi-file-fill"><i class="bi-file-fill"/>file-fill</option>
                    <option value="bi-file-font"><i class="bi-file-font"/>file-font</option>
                    <option value="bi-file-font-fill"><i class="bi-file-font-fill"/>file-font-fill</option>
                    <option value="bi-file-image"><i class="bi-file-image"/>file-image</option>
                    <option value="bi-file-image-fill"><i class="bi-file-image-fill"/>file-image-fill</option>
                    <option value="bi-file-lock"><i class="bi-file-lock"/>file-lock</option>
                    <option value="bi-file-lock-fill"><i class="bi-file-lock-fill"/>file-lock-fill</option>
                    <option value="bi-file-lock2"><i class="bi-file-lock2"/>file-lock2</option>
                    <option value="bi-file-lock2-fill"><i class="bi-file-lock2-fill"/>file-lock2-fill</option>
                    <option value="bi-file-medical"><i class="bi-file-medical"/>file-medical</option>
                    <option value="bi-file-medical-fill"><i class="bi-file-medical-fill"/>file-medical-fill</option>
                    <option value="bi-file-minus"><i class="bi-file-minus"/>file-minus</option>
                    <option value="bi-file-minus-fill"><i class="bi-file-minus-fill"/>file-minus-fill</option>
                    <option value="bi-file-music"><i class="bi-file-music"/>file-music</option>
                    <option value="bi-file-music-fill"><i class="bi-file-music-fill"/>file-music-fill</option>
                    <option value="bi-file-pdf"><i class="bi-file-pdf"/>file-pdf</option>
                    <option value="bi-file-pdf-fill"><i class="bi-file-pdf-fill"/>file-pdf-fill</option>
                    <option value="bi-file-person"><i class="bi-file-person"/>file-person</option>
                    <option value="bi-file-person-fill"><i class="bi-file-person-fill"/>file-person-fill</option>
                    <option value="bi-file-play"><i class="bi-file-play"/>file-play</option>
                    <option value="bi-file-play-fill"><i class="bi-file-play-fill"/>file-play-fill</option>
                    <option value="bi-file-plus"><i class="bi-file-plus"/>file-plus</option>
                    <option value="bi-file-plus-fill"><i class="bi-file-plus-fill"/>file-plus-fill</option>
                    <option value="bi-file-post"><i class="bi-file-post"/>file-post</option>
                    <option value="bi-file-post-fill"><i class="bi-file-post-fill"/>file-post-fill</option>
                    <option value="bi-file-ppt"><i class="bi-file-ppt"/>file-ppt</option>
                    <option value="bi-file-ppt-fill"><i class="bi-file-ppt-fill"/>file-ppt-fill</option>
                    <option value="bi-file-richtext"><i class="bi-file-richtext"/>file-richtext</option>
                    <option value="bi-file-richtext-fill"><i class="bi-file-richtext-fill"/>file-richtext-fill</option>
                    <option value="bi-file-ruled"><i class="bi-file-ruled"/>file-ruled</option>
                    <option value="bi-file-ruled-fill"><i class="bi-file-ruled-fill"/>file-ruled-fill</option>
                    <option value="bi-file-slides"><i class="bi-file-slides"/>file-slides</option>
                    <option value="bi-file-slides-fill"><i class="bi-file-slides-fill"/>file-slides-fill</option>
                    <option value="bi-file-spreadsheet"><i class="bi-file-spreadsheet"/>file-spreadsheet</option>
                    <option value="bi-file-spreadsheet-fill"><i class="bi-file-spreadsheet-fill"/>file-spreadsheet-fill
                    </option>
                    <option value="bi-file-text"><i class="bi-file-text"/>file-text</option>
                    <option value="bi-file-text-fill"><i class="bi-file-text-fill"/>file-text-fill</option>
                    <option value="bi-file-word"><i class="bi-file-word"/>file-word</option>
                    <option value="bi-file-word-fill"><i class="bi-file-word-fill"/>file-word-fill</option>
                    <option value="bi-file-x"><i class="bi-file-x"/>file-x</option>
                    <option value="bi-file-x-fill"><i class="bi-file-x-fill"/>file-x-fill</option>
                    <option value="bi-file-zip"><i class="bi-file-zip"/>file-zip</option>
                    <option value="bi-file-zip-fill"><i class="bi-file-zip-fill"/>file-zip-fill</option>
                    <option value="bi-files"><i class="bi-files"/>files</option>
                    <option value="bi-files-alt"><i class="bi-files-alt"/>files-alt</option>
                    <option value="bi-filetype-aac"><i class="bi-filetype-aac"/>filetype-aac</option>
                    <option value="bi-filetype-ai"><i class="bi-filetype-ai"/>filetype-ai</option>
                    <option value="bi-filetype-bmp"><i class="bi-filetype-bmp"/>filetype-bmp</option>
                    <option value="bi-filetype-cs"><i class="bi-filetype-cs"/>filetype-cs</option>
                    <option value="bi-filetype-css"><i class="bi-filetype-css"/>filetype-css</option>
                    <option value="bi-filetype-csv"><i class="bi-filetype-csv"/>filetype-csv</option>
                    <option value="bi-filetype-doc"><i class="bi-filetype-doc"/>filetype-doc</option>
                    <option value="bi-filetype-docx"><i class="bi-filetype-docx"/>filetype-docx</option>
                    <option value="bi-filetype-exe"><i class="bi-filetype-exe"/>filetype-exe</option>
                    <option value="bi-filetype-gif"><i class="bi-filetype-gif"/>filetype-gif</option>
                    <option value="bi-filetype-heic"><i class="bi-filetype-heic"/>filetype-heic</option>
                    <option value="bi-filetype-html"><i class="bi-filetype-html"/>filetype-html</option>
                    <option value="bi-filetype-java"><i class="bi-filetype-java"/>filetype-java</option>
                    <option value="bi-filetype-jpg"><i class="bi-filetype-jpg"/>filetype-jpg</option>
                    <option value="bi-filetype-js"><i class="bi-filetype-js"/>filetype-js</option>
                    <option value="bi-filetype-json"><i class="bi-filetype-json"/>filetype-json</option>
                    <option value="bi-filetype-jsx"><i class="bi-filetype-jsx"/>filetype-jsx</option>
                    <option value="bi-filetype-key"><i class="bi-filetype-key"/>filetype-key</option>
                    <option value="bi-filetype-m4p"><i class="bi-filetype-m4p"/>filetype-m4p</option>
                    <option value="bi-filetype-md"><i class="bi-filetype-md"/>filetype-md</option>
                    <option value="bi-filetype-mdx"><i class="bi-filetype-mdx"/>filetype-mdx</option>
                    <option value="bi-filetype-mov"><i class="bi-filetype-mov"/>filetype-mov</option>
                    <option value="bi-filetype-mp3"><i class="bi-filetype-mp3"/>filetype-mp3</option>
                    <option value="bi-filetype-mp4"><i class="bi-filetype-mp4"/>filetype-mp4</option>
                    <option value="bi-filetype-otf"><i class="bi-filetype-otf"/>filetype-otf</option>
                    <option value="bi-filetype-pdf"><i class="bi-filetype-pdf"/>filetype-pdf</option>
                    <option value="bi-filetype-php"><i class="bi-filetype-php"/>filetype-php</option>
                    <option value="bi-filetype-png"><i class="bi-filetype-png"/>filetype-png</option>
                    <option value="bi-filetype-ppt"><i class="bi-filetype-ppt"/>filetype-ppt</option>
                    <option value="bi-filetype-pptx"><i class="bi-filetype-pptx"/>filetype-pptx</option>
                    <option value="bi-filetype-psd"><i class="bi-filetype-psd"/>filetype-psd</option>
                    <option value="bi-filetype-py"><i class="bi-filetype-py"/>filetype-py</option>
                    <option value="bi-filetype-raw"><i class="bi-filetype-raw"/>filetype-raw</option>
                    <option value="bi-filetype-rb"><i class="bi-filetype-rb"/>filetype-rb</option>
                    <option value="bi-filetype-sass"><i class="bi-filetype-sass"/>filetype-sass</option>
                    <option value="bi-filetype-scss"><i class="bi-filetype-scss"/>filetype-scss</option>
                    <option value="bi-filetype-sh"><i class="bi-filetype-sh"/>filetype-sh</option>
                    <option value="bi-filetype-svg"><i class="bi-filetype-svg"/>filetype-svg</option>
                    <option value="bi-filetype-tiff"><i class="bi-filetype-tiff"/>filetype-tiff</option>
                    <option value="bi-filetype-tsx"><i class="bi-filetype-tsx"/>filetype-tsx</option>
                    <option value="bi-filetype-ttf"><i class="bi-filetype-ttf"/>filetype-ttf</option>
                    <option value="bi-filetype-txt"><i class="bi-filetype-txt"/>filetype-txt</option>
                    <option value="bi-filetype-wav"><i class="bi-filetype-wav"/>filetype-wav</option>
                    <option value="bi-filetype-woff"><i class="bi-filetype-woff"/>filetype-woff</option>
                    <option value="bi-filetype-xls"><i class="bi-filetype-xls"/>filetype-xls</option>
                    <option value="bi-filetype-xlsx"><i class="bi-filetype-xlsx"/>filetype-xlsx</option>
                    <option value="bi-filetype-xml"><i class="bi-filetype-xml"/>filetype-xml</option>
                    <option value="bi-filetype-yml"><i class="bi-filetype-yml"/>filetype-yml</option>
                    <option value="bi-film"><i class="bi-film"/>film</option>
                    <option value="bi-filter"><i class="bi-filter"/>filter</option>
                    <option value="bi-filter-circle"><i class="bi-filter-circle"/>filter-circle</option>
                    <option value="bi-filter-circle-fill"><i class="bi-filter-circle-fill"/>filter-circle-fill</option>
                    <option value="bi-filter-left"><i class="bi-filter-left"/>filter-left</option>
                    <option value="bi-filter-right"><i class="bi-filter-right"/>filter-right</option>
                    <option value="bi-filter-square"><i class="bi-filter-square"/>filter-square</option>
                    <option value="bi-filter-square-fill"><i class="bi-filter-square-fill"/>filter-square-fill</option>
                    <option value="bi-fingerprint"><i class="bi-fingerprint"/>fingerprint</option>
                    <option value="bi-flag"><i class="bi-flag"/>flag</option>
                    <option value="bi-flag-fill"><i class="bi-flag-fill"/>flag-fill</option>
                    <option value="bi-flower1"><i class="bi-flower1"/>flower1</option>
                    <option value="bi-flower2"><i class="bi-flower2"/>flower2</option>
                    <option value="bi-flower3"><i class="bi-flower3"/>flower3</option>
                    <option value="bi-folder"><i class="bi-folder"/>folder</option>
                    <option value="bi-folder-check"><i class="bi-folder-check"/>folder-check</option>
                    <option value="bi-folder-fill"><i class="bi-folder-fill"/>folder-fill</option>
                    <option value="bi-folder-minus"><i class="bi-folder-minus"/>folder-minus</option>
                    <option value="bi-folder-plus"><i class="bi-folder-plus"/>folder-plus</option>
                    <option value="bi-folder-symlink"><i class="bi-folder-symlink"/>folder-symlink</option>
                    <option value="bi-folder-symlink-fill"><i class="bi-folder-symlink-fill"/>folder-symlink-fill
                    </option>
                    <option value="bi-folder-x"><i class="bi-folder-x"/>folder-x</option>
                    <option value="bi-folder2"><i class="bi-folder2"/>folder2</option>
                    <option value="bi-folder2-open"><i class="bi-folder2-open"/>folder2-open</option>
                    <option value="bi-fonts"><i class="bi-fonts"/>fonts</option>
                    <option value="bi-forward"><i class="bi-forward"/>forward</option>
                    <option value="bi-forward-fill"><i class="bi-forward-fill"/>forward-fill</option>
                    <option value="bi-front"><i class="bi-front"/>front</option>
                    <option value="bi-fullscreen"><i class="bi-fullscreen"/>fullscreen</option>
                    <option value="bi-fullscreen-exit"><i class="bi-fullscreen-exit"/>fullscreen-exit</option>
                    <option value="bi-funnel"><i class="bi-funnel"/>funnel</option>
                    <option value="bi-funnel-fill"><i class="bi-funnel-fill"/>funnel-fill</option>
                    <option value="bi-gear"><i class="bi-gear"/>gear</option>
                    <option value="bi-gear-fill"><i class="bi-gear-fill"/>gear-fill</option>
                    <option value="bi-gear-wide"><i class="bi-gear-wide"/>gear-wide</option>
                    <option value="bi-gear-wide-connected"><i class="bi-gear-wide-connected"/>gear-wide-connected
                    </option>
                    <option value="bi-gem"><i class="bi-gem"/>gem</option>
                    <option value="bi-gender-ambiguous"><i class="bi-gender-ambiguous"/>gender-ambiguous</option>
                    <option value="bi-gender-female"><i class="bi-gender-female"/>gender-female</option>
                    <option value="bi-gender-male"><i class="bi-gender-male"/>gender-male</option>
                    <option value="bi-gender-trans"><i class="bi-gender-trans"/>gender-trans</option>
                    <option value="bi-geo"><i class="bi-geo"/>geo</option>
                    <option value="bi-geo-alt"><i class="bi-geo-alt"/>geo-alt</option>
                    <option value="bi-geo-alt-fill"><i class="bi-geo-alt-fill"/>geo-alt-fill</option>
                    <option value="bi-geo-fill"><i class="bi-geo-fill"/>geo-fill</option>
                    <option value="bi-gift"><i class="bi-gift"/>gift</option>
                    <option value="bi-gift-fill"><i class="bi-gift-fill"/>gift-fill</option>
                    <option value="bi-git"><i class="bi-git"/>git</option>
                    <option value="bi-github"><i class="bi-github"/>github</option>
                    <option value="bi-globe"><i class="bi-globe"/>globe</option>
                    <option value="bi-globe2"><i class="bi-globe2"/>globe2</option>
                    <option value="bi-google"><i class="bi-google"/>google</option>
                    <option value="bi-gpu-card"><i class="bi-gpu-card"/>gpu-card</option>
                    <option value="bi-graph-down"><i class="bi-graph-down"/>graph-down</option>
                    <option value="bi-graph-down-arrow"><i class="bi-graph-down-arrow"/>graph-down-arrow</option>
                    <option value="bi-graph-up"><i class="bi-graph-up"/>graph-up</option>
                    <option value="bi-graph-up-arrow"><i class="bi-graph-up-arrow"/>graph-up-arrow</option>
                    <option value="bi-grid"><i class="bi-grid"/>grid</option>
                    <option value="bi-grid-1x2"><i class="bi-grid-1x2"/>grid-1x2</option>
                    <option value="bi-grid-1x2-fill"><i class="bi-grid-1x2-fill"/>grid-1x2-fill</option>
                    <option value="bi-grid-3x2"><i class="bi-grid-3x2"/>grid-3x2</option>
                    <option value="bi-grid-3x2-gap"><i class="bi-grid-3x2-gap"/>grid-3x2-gap</option>
                    <option value="bi-grid-3x2-gap-fill"><i class="bi-grid-3x2-gap-fill"/>grid-3x2-gap-fill</option>
                    <option value="bi-grid-3x3"><i class="bi-grid-3x3"/>grid-3x3</option>
                    <option value="bi-grid-3x3-gap"><i class="bi-grid-3x3-gap"/>grid-3x3-gap</option>
                    <option value="bi-grid-3x3-gap-fill"><i class="bi-grid-3x3-gap-fill"/>grid-3x3-gap-fill</option>
                    <option value="bi-grid-fill"><i class="bi-grid-fill"/>grid-fill</option>
                    <option value="bi-grip-horizontal"><i class="bi-grip-horizontal"/>grip-horizontal</option>
                    <option value="bi-grip-vertical"><i class="bi-grip-vertical"/>grip-vertical</option>
                    <option value="bi-hammer"><i class="bi-hammer"/>hammer</option>
                    <option value="bi-hand-index"><i class="bi-hand-index"/>hand-index</option>
                    <option value="bi-hand-index-fill"><i class="bi-hand-index-fill"/>hand-index-fill</option>
                    <option value="bi-hand-index-thumb"><i class="bi-hand-index-thumb"/>hand-index-thumb</option>
                    <option value="bi-hand-index-thumb-fill"><i class="bi-hand-index-thumb-fill"/>hand-index-thumb-fill
                    </option>
                    <option value="bi-hand-thumbs-down"><i class="bi-hand-thumbs-down"/>hand-thumbs-down</option>
                    <option value="bi-hand-thumbs-down-fill"><i class="bi-hand-thumbs-down-fill"/>hand-thumbs-down-fill
                    </option>
                    <option value="bi-hand-thumbs-up"><i class="bi-hand-thumbs-up"/>hand-thumbs-up</option>
                    <option value="bi-hand-thumbs-up-fill"><i class="bi-hand-thumbs-up-fill"/>hand-thumbs-up-fill
                    </option>
                    <option value="bi-handbag"><i class="bi-handbag"/>handbag</option>
                    <option value="bi-handbag-fill"><i class="bi-handbag-fill"/>handbag-fill</option>
                    <option value="bi-hash"><i class="bi-hash"/>hash</option>
                    <option value="bi-hdd"><i class="bi-hdd"/>hdd</option>
                    <option value="bi-hdd-fill"><i class="bi-hdd-fill"/>hdd-fill</option>
                    <option value="bi-hdd-network"><i class="bi-hdd-network"/>hdd-network</option>
                    <option value="bi-hdd-network-fill"><i class="bi-hdd-network-fill"/>hdd-network-fill</option>
                    <option value="bi-hdd-rack"><i class="bi-hdd-rack"/>hdd-rack</option>
                    <option value="bi-hdd-rack-fill"><i class="bi-hdd-rack-fill"/>hdd-rack-fill</option>
                    <option value="bi-hdd-stack"><i class="bi-hdd-stack"/>hdd-stack</option>
                    <option value="bi-hdd-stack-fill"><i class="bi-hdd-stack-fill"/>hdd-stack-fill</option>
                    <option value="bi-hdmi"><i class="bi-hdmi"/>hdmi</option>
                    <option value="bi-hdmi-fill"><i class="bi-hdmi-fill"/>hdmi-fill</option>
                    <option value="bi-headphones"><i class="bi-headphones"/>headphones</option>
                    <option value="bi-headset"><i class="bi-headset"/>headset</option>
                    <option value="bi-headset-vr"><i class="bi-headset-vr"/>headset-vr</option>
                    <option value="bi-heart"><i class="bi-heart"/>heart</option>
                    <option value="bi-heart-arrow"><i class="bi-heart-arrow"/>heart-arrow</option>
                    <option value="bi-heart-fill"><i class="bi-heart-fill"/>heart-fill</option>
                    <option value="bi-heart-half"><i class="bi-heart-half"/>heart-half</option>
                    <option value="bi-heart-pulse"><i class="bi-heart-pulse"/>heart-pulse</option>
                    <option value="bi-heart-pulse-fill"><i class="bi-heart-pulse-fill"/>heart-pulse-fill</option>
                    <option value="bi-heartbreak"><i class="bi-heartbreak"/>heartbreak</option>
                    <option value="bi-heartbreak-fill"><i class="bi-heartbreak-fill"/>heartbreak-fill</option>
                    <option value="bi-hearts"><i class="bi-hearts"/>hearts</option>
                    <option value="bi-heptagon"><i class="bi-heptagon"/>heptagon</option>
                    <option value="bi-heptagon-fill"><i class="bi-heptagon-fill"/>heptagon-fill</option>
                    <option value="bi-heptagon-half"><i class="bi-heptagon-half"/>heptagon-half</option>
                    <option value="bi-hexagon"><i class="bi-hexagon"/>hexagon</option>
                    <option value="bi-hexagon-fill"><i class="bi-hexagon-fill"/>hexagon-fill</option>
                    <option value="bi-hexagon-half"><i class="bi-hexagon-half"/>hexagon-half</option>
                    <option value="bi-hospital"><i class="bi-hospital"/>hospital</option>
                    <option value="bi-hospital-fill"><i class="bi-hospital-fill"/>hospital-fill</option>
                    <option value="bi-hourglass"><i class="bi-hourglass"/>hourglass</option>
                    <option value="bi-hourglass-bottom"><i class="bi-hourglass-bottom"/>hourglass-bottom</option>
                    <option value="bi-hourglass-split"><i class="bi-hourglass-split"/>hourglass-split</option>
                    <option value="bi-hourglass-top"><i class="bi-hourglass-top"/>hourglass-top</option>
                    <option value="bi-house"><i class="bi-house"/>house</option>
                    <option value="bi-house-door"><i class="bi-house-door"/>house-door</option>
                    <option value="bi-house-door-fill"><i class="bi-house-door-fill"/>house-door-fill</option>
                    <option value="bi-house-fill"><i class="bi-house-fill"/>house-fill</option>
                    <option value="bi-house-heart"><i class="bi-house-heart"/>house-heart</option>
                    <option value="bi-house-heart-fill"><i class="bi-house-heart-fill"/>house-heart-fill</option>
                    <option value="bi-hr"><i class="bi-hr"/>hr</option>
                    <option value="bi-hurricane"><i class="bi-hurricane"/>hurricane</option>
                    <option value="bi-hypnotize"><i class="bi-hypnotize"/>hypnotize</option>
                    <option value="bi-image"><i class="bi-image"/>image</option>
                    <option value="bi-image-alt"><i class="bi-image-alt"/>image-alt</option>
                    <option value="bi-image-fill"><i class="bi-image-fill"/>image-fill</option>
                    <option value="bi-images"><i class="bi-images"/>images</option>
                    <option value="bi-inbox"><i class="bi-inbox"/>inbox</option>
                    <option value="bi-inbox-fill"><i class="bi-inbox-fill"/>inbox-fill</option>
                    <option value="bi-inboxes-fill"><i class="bi-inboxes-fill"/>inboxes-fill</option>
                    <option value="bi-inboxes"><i class="bi-inboxes"/>inboxes</option>
                    <option value="bi-incognito"><i class="bi-incognito"/>incognito</option>
                    <option value="bi-infinity"><i class="bi-infinity"/>infinity</option>
                    <option value="bi-info-circle"><i class="bi-info-circle"/>info-circle</option>
                    <option value="bi-info-circle-fill"><i class="bi-info-circle-fill"/>info-circle-fill</option>
                    <option value="bi-info-lg"><i class="bi-info-lg"/>info-lg</option>
                    <option value="bi-info-square"><i class="bi-info-square"/>info-square</option>
                    <option value="bi-info-square-fill"><i class="bi-info-square-fill"/>info-square-fill</option>
                    <option value="bi-input-cursor"><i class="bi-input-cursor"/>input-cursor</option>
                    <option value="bi-input-cursor-text"><i class="bi-input-cursor-text"/>input-cursor-text</option>
                    <option value="bi-instagram"><i class="bi-instagram"/>instagram</option>
                    <option value="bi-intersect"><i class="bi-intersect"/>intersect</option>
                    <option value="bi-journal"><i class="bi-journal"/>journal</option>
                    <option value="bi-journal-album"><i class="bi-journal-album"/>journal-album</option>
                    <option value="bi-journal-arrow-down"><i class="bi-journal-arrow-down"/>journal-arrow-down</option>
                    <option value="bi-journal-arrow-up"><i class="bi-journal-arrow-up"/>journal-arrow-up</option>
                    <option value="bi-journal-bookmark"><i class="bi-journal-bookmark"/>journal-bookmark</option>
                    <option value="bi-journal-bookmark-fill"><i class="bi-journal-bookmark-fill"/>journal-bookmark-fill
                    </option>
                    <option value="bi-journal-check"><i class="bi-journal-check"/>journal-check</option>
                    <option value="bi-journal-code"><i class="bi-journal-code"/>journal-code</option>
                    <option value="bi-journal-medical"><i class="bi-journal-medical"/>journal-medical</option>
                    <option value="bi-journal-minus"><i class="bi-journal-minus"/>journal-minus</option>
                    <option value="bi-journal-plus"><i class="bi-journal-plus"/>journal-plus</option>
                    <option value="bi-journal-richtext"><i class="bi-journal-richtext"/>journal-richtext</option>
                    <option value="bi-journal-text"><i class="bi-journal-text"/>journal-text</option>
                    <option value="bi-journal-x"><i class="bi-journal-x"/>journal-x</option>
                    <option value="bi-journals"><i class="bi-journals"/>journals</option>
                    <option value="bi-joystick"><i class="bi-joystick"/>joystick</option>
                    <option value="bi-justify"><i class="bi-justify"/>justify</option>
                    <option value="bi-justify-left"><i class="bi-justify-left"/>justify-left</option>
                    <option value="bi-justify-right"><i class="bi-justify-right"/>justify-right</option>
                    <option value="bi-kanban"><i class="bi-kanban"/>kanban</option>
                    <option value="bi-kanban-fill"><i class="bi-kanban-fill"/>kanban-fill</option>
                    <option value="bi-key"><i class="bi-key"/>key</option>
                    <option value="bi-key-fill"><i class="bi-key-fill"/>key-fill</option>
                    <option value="bi-keyboard"><i class="bi-keyboard"/>keyboard</option>
                    <option value="bi-keyboard-fill"><i class="bi-keyboard-fill"/>keyboard-fill</option>
                    <option value="bi-ladder"><i class="bi-ladder"/>ladder</option>
                    <option value="bi-lamp"><i class="bi-lamp"/>lamp</option>
                    <option value="bi-lamp-fill"><i class="bi-lamp-fill"/>lamp-fill</option>
                    <option value="bi-laptop"><i class="bi-laptop"/>laptop</option>
                    <option value="bi-laptop-fill"><i class="bi-laptop-fill"/>laptop-fill</option>
                    <option value="bi-layer-backward"><i class="bi-layer-backward"/>layer-backward</option>
                    <option value="bi-layer-forward"><i class="bi-layer-forward"/>layer-forward</option>
                    <option value="bi-layers"><i class="bi-layers"/>layers</option>
                    <option value="bi-layers-fill"><i class="bi-layers-fill"/>layers-fill</option>
                    <option value="bi-layers-half"><i class="bi-layers-half"/>layers-half</option>
                    <option value="bi-layout-sidebar"><i class="bi-layout-sidebar"/>layout-sidebar</option>
                    <option value="bi-layout-sidebar-inset-reverse"><i class="bi-layout-sidebar-inset-reverse"/>layout-sidebar-inset-reverse
                    </option>
                    <option value="bi-layout-sidebar-inset"><i class="bi-layout-sidebar-inset"/>layout-sidebar-inset
                    </option>
                    <option value="bi-layout-sidebar-reverse"><i class="bi-layout-sidebar-reverse"/>layout-sidebar-reverse
                    </option>
                    <option value="bi-layout-split"><i class="bi-layout-split"/>layout-split</option>
                    <option value="bi-layout-text-sidebar"><i class="bi-layout-text-sidebar"/>layout-text-sidebar
                    </option>
                    <option value="bi-layout-text-sidebar-reverse"><i class="bi-layout-text-sidebar-reverse"/>layout-text-sidebar-reverse
                    </option>
                    <option value="bi-layout-text-window"><i class="bi-layout-text-window"/>layout-text-window</option>
                    <option value="bi-layout-text-window-reverse"><i class="bi-layout-text-window-reverse"/>layout-text-window-reverse
                    </option>
                    <option value="bi-layout-three-columns"><i class="bi-layout-three-columns"/>layout-three-columns
                    </option>
                    <option value="bi-layout-wtf"><i class="bi-layout-wtf"/>layout-wtf</option>
                    <option value="bi-life-preserver"><i class="bi-life-preserver"/>life-preserver</option>
                    <option value="bi-lightbulb"><i class="bi-lightbulb"/>lightbulb</option>
                    <option value="bi-lightbulb-fill"><i class="bi-lightbulb-fill"/>lightbulb-fill</option>
                    <option value="bi-lightbulb-off"><i class="bi-lightbulb-off"/>lightbulb-off</option>
                    <option value="bi-lightbulb-off-fill"><i class="bi-lightbulb-off-fill"/>lightbulb-off-fill</option>
                    <option value="bi-lightning"><i class="bi-lightning"/>lightning</option>
                    <option value="bi-lightning-charge"><i class="bi-lightning-charge"/>lightning-charge</option>
                    <option value="bi-lightning-charge-fill"><i class="bi-lightning-charge-fill"/>lightning-charge-fill
                    </option>
                    <option value="bi-lightning-fill"><i class="bi-lightning-fill"/>lightning-fill</option>
                    <option value="bi-line"><i class="bi-line"/>line</option>
                    <option value="bi-link"><i class="bi-link"/>link</option>
                    <option value="bi-link-45deg"><i class="bi-link-45deg"/>link-45deg</option>
                    <option value="bi-linkedin"><i class="bi-linkedin"/>linkedin</option>
                    <option value="bi-list"><i class="bi-list"/>list</option>
                    <option value="bi-list-check"><i class="bi-list-check"/>list-check</option>
                    <option value="bi-list-columns"><i class="bi-list-columns"/>list-columns</option>
                    <option value="bi-list-columns-reverse"><i class="bi-list-columns-reverse"/>list-columns-reverse
                    </option>
                    <option value="bi-list-nested"><i class="bi-list-nested"/>list-nested</option>
                    <option value="bi-list-ol"><i class="bi-list-ol"/>list-ol</option>
                    <option value="bi-list-stars"><i class="bi-list-stars"/>list-stars</option>
                    <option value="bi-list-task"><i class="bi-list-task"/>list-task</option>
                    <option value="bi-list-ul"><i class="bi-list-ul"/>list-ul</option>
                    <option value="bi-lock"><i class="bi-lock"/>lock</option>
                    <option value="bi-lock-fill"><i class="bi-lock-fill"/>lock-fill</option>
                    <option value="bi-magic"><i class="bi-magic"/>magic</option>
                    <option value="bi-magnet"><i class="bi-magnet"/>magnet</option>
                    <option value="bi-magnet-fill"><i class="bi-magnet-fill"/>magnet-fill</option>
                    <option value="bi-mailbox"><i class="bi-mailbox"/>mailbox</option>
                    <option value="bi-mailbox2"><i class="bi-mailbox2"/>mailbox2</option>
                    <option value="bi-map"><i class="bi-map"/>map</option>
                    <option value="bi-map-fill"><i class="bi-map-fill"/>map-fill</option>
                    <option value="bi-markdown"><i class="bi-markdown"/>markdown</option>
                    <option value="bi-markdown-fill"><i class="bi-markdown-fill"/>markdown-fill</option>
                    <option value="bi-mask"><i class="bi-mask"/>mask</option>
                    <option value="bi-mastodon"><i class="bi-mastodon"/>mastodon</option>
                    <option value="bi-medium"><i class="bi-medium"/>medium</option>
                    <option value="bi-megaphone"><i class="bi-megaphone"/>megaphone</option>
                    <option value="bi-megaphone-fill"><i class="bi-megaphone-fill"/>megaphone-fill</option>
                    <option value="bi-memory"><i class="bi-memory"/>memory</option>
                    <option value="bi-menu-app"><i class="bi-menu-app"/>menu-app</option>
                    <option value="bi-menu-app-fill"><i class="bi-menu-app-fill"/>menu-app-fill</option>
                    <option value="bi-menu-button"><i class="bi-menu-button"/>menu-button</option>
                    <option value="bi-menu-button-fill"><i class="bi-menu-button-fill"/>menu-button-fill</option>
                    <option value="bi-menu-button-wide"><i class="bi-menu-button-wide"/>menu-button-wide</option>
                    <option value="bi-menu-button-wide-fill"><i class="bi-menu-button-wide-fill"/>menu-button-wide-fill
                    </option>
                    <option value="bi-menu-down"><i class="bi-menu-down"/>menu-down</option>
                    <option value="bi-menu-up"><i class="bi-menu-up"/>menu-up</option>
                    <option value="bi-messenger"><i class="bi-messenger"/>messenger</option>
                    <option value="bi-meta"><i class="bi-meta"/>meta</option>
                    <option value="bi-mic"><i class="bi-mic"/>mic</option>
                    <option value="bi-mic-fill"><i class="bi-mic-fill"/>mic-fill</option>
                    <option value="bi-mic-mute"><i class="bi-mic-mute"/>mic-mute</option>
                    <option value="bi-mic-mute-fill"><i class="bi-mic-mute-fill"/>mic-mute-fill</option>
                    <option value="bi-microsoft"><i class="bi-microsoft"/>microsoft</option>
                    <option value="bi-minecart"><i class="bi-minecart"/>minecart</option>
                    <option value="bi-minecart-loaded"><i class="bi-minecart-loaded"/>minecart-loaded</option>
                    <option value="bi-modem"><i class="bi-modem"/>modem</option>
                    <option value="bi-modem-fill"><i class="bi-modem-fill"/>modem-fill</option>
                    <option value="bi-moisture"><i class="bi-moisture"/>moisture</option>
                    <option value="bi-moon"><i class="bi-moon"/>moon</option>
                    <option value="bi-moon-fill"><i class="bi-moon-fill"/>moon-fill</option>
                    <option value="bi-moon-stars"><i class="bi-moon-stars"/>moon-stars</option>
                    <option value="bi-moon-stars-fill"><i class="bi-moon-stars-fill"/>moon-stars-fill</option>
                    <option value="bi-mortarboard"><i class="bi-mortarboard"/>mortarboard</option>
                    <option value="bi-mortarboard-fill"><i class="bi-mortarboard-fill"/>mortarboard-fill</option>
                    <option value="bi-motherboard"><i class="bi-motherboard"/>motherboard</option>
                    <option value="bi-motherboard-fill"><i class="bi-motherboard-fill"/>motherboard-fill</option>
                    <option value="bi-mouse"><i class="bi-mouse"/>mouse</option>
                    <option value="bi-mouse-fill"><i class="bi-mouse-fill"/>mouse-fill</option>
                    <option value="bi-mouse2"><i class="bi-mouse2"/>mouse2</option>
                    <option value="bi-mouse2-fill"><i class="bi-mouse2-fill"/>mouse2-fill</option>
                    <option value="bi-mouse3"><i class="bi-mouse3"/>mouse3</option>
                    <option value="bi-mouse3-fill"><i class="bi-mouse3-fill"/>mouse3-fill</option>
                    <option value="bi-music-note"><i class="bi-music-note"/>music-note</option>
                    <option value="bi-music-note-beamed"><i class="bi-music-note-beamed"/>music-note-beamed</option>
                    <option value="bi-music-note-list"><i class="bi-music-note-list"/>music-note-list</option>
                    <option value="bi-music-player"><i class="bi-music-player"/>music-player</option>
                    <option value="bi-music-player-fill"><i class="bi-music-player-fill"/>music-player-fill</option>
                    <option value="bi-newspaper"><i class="bi-newspaper"/>newspaper</option>
                    <option value="bi-nintendo-switch"><i class="bi-nintendo-switch"/>nintendo-switch</option>
                    <option value="bi-node-minus"><i class="bi-node-minus"/>node-minus</option>
                    <option value="bi-node-minus-fill"><i class="bi-node-minus-fill"/>node-minus-fill</option>
                    <option value="bi-node-plus"><i class="bi-node-plus"/>node-plus</option>
                    <option value="bi-node-plus-fill"><i class="bi-node-plus-fill"/>node-plus-fill</option>
                    <option value="bi-nut"><i class="bi-nut"/>nut</option>
                    <option value="bi-nut-fill"><i class="bi-nut-fill"/>nut-fill</option>
                    <option value="bi-octagon"><i class="bi-octagon"/>octagon</option>
                    <option value="bi-octagon-fill"><i class="bi-octagon-fill"/>octagon-fill</option>
                    <option value="bi-octagon-half"><i class="bi-octagon-half"/>octagon-half</option>
                    <option value="bi-optical-audio"><i class="bi-optical-audio"/>optical-audio</option>
                    <option value="bi-optical-audio-fill"><i class="bi-optical-audio-fill"/>optical-audio-fill</option>
                    <option value="bi-option"><i class="bi-option"/>option</option>
                    <option value="bi-outlet"><i class="bi-outlet"/>outlet</option>
                    <option value="bi-paint-bucket"><i class="bi-paint-bucket"/>paint-bucket</option>
                    <option value="bi-palette"><i class="bi-palette"/>palette</option>
                    <option value="bi-palette-fill"><i class="bi-palette-fill"/>palette-fill</option>
                    <option value="bi-palette2"><i class="bi-palette2"/>palette2</option>
                    <option value="bi-paperclip"><i class="bi-paperclip"/>paperclip</option>
                    <option value="bi-paragraph"><i class="bi-paragraph"/>paragraph</option>
                    <option value="bi-patch-check"><i class="bi-patch-check"/>patch-check</option>
                    <option value="bi-patch-check-fill"><i class="bi-patch-check-fill"/>patch-check-fill</option>
                    <option value="bi-patch-exclamation"><i class="bi-patch-exclamation"/>patch-exclamation</option>
                    <option value="bi-patch-exclamation-fill"><i class="bi-patch-exclamation-fill"/>patch-exclamation-fill
                    </option>
                    <option value="bi-patch-minus"><i class="bi-patch-minus"/>patch-minus</option>
                    <option value="bi-patch-minus-fill"><i class="bi-patch-minus-fill"/>patch-minus-fill</option>
                    <option value="bi-patch-plus"><i class="bi-patch-plus"/>patch-plus</option>
                    <option value="bi-patch-plus-fill"><i class="bi-patch-plus-fill"/>patch-plus-fill</option>
                    <option value="bi-patch-question"><i class="bi-patch-question"/>patch-question</option>
                    <option value="bi-patch-question-fill"><i class="bi-patch-question-fill"/>patch-question-fill
                    </option>
                    <option value="bi-pause"><i class="bi-pause"/>pause</option>
                    <option value="bi-pause-btn"><i class="bi-pause-btn"/>pause-btn</option>
                    <option value="bi-pause-btn-fill"><i class="bi-pause-btn-fill"/>pause-btn-fill</option>
                    <option value="bi-pause-circle"><i class="bi-pause-circle"/>pause-circle</option>
                    <option value="bi-pause-circle-fill"><i class="bi-pause-circle-fill"/>pause-circle-fill</option>
                    <option value="bi-pause-fill"><i class="bi-pause-fill"/>pause-fill</option>
                    <option value="bi-paypal"><i class="bi-paypal"/>paypal</option>
                    <option value="bi-pc"><i class="bi-pc"/>pc</option>
                    <option value="bi-pc-display"><i class="bi-pc-display"/>pc-display</option>
                    <option value="bi-pc-display-horizontal"><i class="bi-pc-display-horizontal"/>pc-display-horizontal
                    </option>
                    <option value="bi-pc-horizontal"><i class="bi-pc-horizontal"/>pc-horizontal</option>
                    <option value="bi-pci-card"><i class="bi-pci-card"/>pci-card</option>
                    <option value="bi-peace"><i class="bi-peace"/>peace</option>
                    <option value="bi-peace-fill"><i class="bi-peace-fill"/>peace-fill</option>
                    <option value="bi-pen"><i class="bi-pen"/>pen</option>
                    <option value="bi-pen-fill"><i class="bi-pen-fill"/>pen-fill</option>
                    <option value="bi-pencil"><i class="bi-pencil"/>pencil</option>
                    <option value="bi-pencil-fill"><i class="bi-pencil-fill"/>pencil-fill</option>
                    <option value="bi-pencil-square"><i class="bi-pencil-square"/>pencil-square</option>
                    <option value="bi-pentagon"><i class="bi-pentagon"/>pentagon</option>
                    <option value="bi-pentagon-fill"><i class="bi-pentagon-fill"/>pentagon-fill</option>
                    <option value="bi-pentagon-half"><i class="bi-pentagon-half"/>pentagon-half</option>
                    <option value="bi-people"><i class="bi-people"/>people</option>
                    <option value="bi-person-circle"><i class="bi-person-circle"/>person-circle</option>
                    <option value="bi-people-fill"><i class="bi-people-fill"/>people-fill</option>
                    <option value="bi-percent"><i class="bi-percent"/>percent</option>
                    <option value="bi-person"><i class="bi-person"/>person</option>
                    <option value="bi-person-badge"><i class="bi-person-badge"/>person-badge</option>
                    <option value="bi-person-badge-fill"><i class="bi-person-badge-fill"/>person-badge-fill</option>
                    <option value="bi-person-bounding-box"><i class="bi-person-bounding-box"/>person-bounding-box
                    </option>
                    <option value="bi-person-check"><i class="bi-person-check"/>person-check</option>
                    <option value="bi-person-check-fill"><i class="bi-person-check-fill"/>person-check-fill</option>
                    <option value="bi-person-dash"><i class="bi-person-dash"/>person-dash</option>
                    <option value="bi-person-dash-fill"><i class="bi-person-dash-fill"/>person-dash-fill</option>
                    <option value="bi-person-fill"><i class="bi-person-fill"/>person-fill</option>
                    <option value="bi-person-heart"><i class="bi-person-heart"/>person-heart</option>
                    <option value="bi-person-hearts"><i class="bi-person-hearts"/>person-hearts</option>
                    <option value="bi-person-lines-fill"><i class="bi-person-lines-fill"/>person-lines-fill</option>
                    <option value="bi-person-plus"><i class="bi-person-plus"/>person-plus</option>
                    <option value="bi-person-plus-fill"><i class="bi-person-plus-fill"/>person-plus-fill</option>
                    <option value="bi-person-rolodex"><i class="bi-person-rolodex"/>person-rolodex</option>
                    <option value="bi-person-square"><i class="bi-person-square"/>person-square</option>
                    <option value="bi-person-video"><i class="bi-person-video"/>person-video</option>
                    <option value="bi-person-video2"><i class="bi-person-video2"/>person-video2</option>
                    <option value="bi-person-video3"><i class="bi-person-video3"/>person-video3</option>
                    <option value="bi-person-workspace"><i class="bi-person-workspace"/>person-workspace</option>
                    <option value="bi-person-x"><i class="bi-person-x"/>person-x</option>
                    <option value="bi-person-x-fill"><i class="bi-person-x-fill"/>person-x-fill</option>
                    <option value="bi-phone"><i class="bi-phone"/>phone</option>
                    <option value="bi-phone-fill"><i class="bi-phone-fill"/>phone-fill</option>
                    <option value="bi-phone-flip"><i class="bi-phone-flip"/>phone-flip</option>
                    <option value="bi-phone-landscape"><i class="bi-phone-landscape"/>phone-landscape</option>
                    <option value="bi-phone-landscape-fill"><i class="bi-phone-landscape-fill"/>phone-landscape-fill
                    </option>
                    <option value="bi-phone-vibrate"><i class="bi-phone-vibrate"/>phone-vibrate</option>
                    <option value="bi-phone-vibrate-fill"><i class="bi-phone-vibrate-fill"/>phone-vibrate-fill</option>
                    <option value="bi-pie-chart"><i class="bi-pie-chart"/>pie-chart</option>
                    <option value="bi-pie-chart-fill"><i class="bi-pie-chart-fill"/>pie-chart-fill</option>
                    <option value="bi-piggy-bank"><i class="bi-piggy-bank"/>piggy-bank</option>
                    <option value="bi-piggy-bank-fill"><i class="bi-piggy-bank-fill"/>piggy-bank-fill</option>
                    <option value="bi-pin"><i class="bi-pin"/>pin</option>
                    <option value="bi-pin-angle"><i class="bi-pin-angle"/>pin-angle</option>
                    <option value="bi-pin-angle-fill"><i class="bi-pin-angle-fill"/>pin-angle-fill</option>
                    <option value="bi-pin-fill"><i class="bi-pin-fill"/>pin-fill</option>
                    <option value="bi-pin-map"><i class="bi-pin-map"/>pin-map</option>
                    <option value="bi-pin-map-fill"><i class="bi-pin-map-fill"/>pin-map-fill</option>
                    <option value="bi-pinterest"><i class="bi-pinterest"/>pinterest</option>
                    <option value="bi-pip"><i class="bi-pip"/>pip</option>
                    <option value="bi-pip-fill"><i class="bi-pip-fill"/>pip-fill</option>
                    <option value="bi-play"><i class="bi-play"/>play</option>
                    <option value="bi-play-btn"><i class="bi-play-btn"/>play-btn</option>
                    <option value="bi-play-btn-fill"><i class="bi-play-btn-fill"/>play-btn-fill</option>
                    <option value="bi-play-circle"><i class="bi-play-circle"/>play-circle</option>
                    <option value="bi-play-circle-fill"><i class="bi-play-circle-fill"/>play-circle-fill</option>
                    <option value="bi-play-fill"><i class="bi-play-fill"/>play-fill</option>
                    <option value="bi-playstation"><i class="bi-playstation"/>playstation</option>
                    <option value="bi-plug"><i class="bi-plug"/>plug</option>
                    <option value="bi-plug-fill"><i class="bi-plug-fill"/>plug-fill</option>
                    <option value="bi-plugin"><i class="bi-plugin"/>plugin</option>
                    <option value="bi-plus"><i class="bi-plus"/>plus</option>
                    <option value="bi-plus-circle"><i class="bi-plus-circle"/>plus-circle</option>
                    <option value="bi-plus-circle-dotted"><i class="bi-plus-circle-dotted"/>plus-circle-dotted</option>
                    <option value="bi-plus-circle-fill"><i class="bi-plus-circle-fill"/>plus-circle-fill</option>
                    <option value="bi-plus-lg"><i class="bi-plus-lg"/>plus-lg</option>
                    <option value="bi-plus-slash-minus"><i class="bi-plus-slash-minus"/>plus-slash-minus</option>
                    <option value="bi-plus-square"><i class="bi-plus-square"/>plus-square</option>
                    <option value="bi-plus-square-dotted"><i class="bi-plus-square-dotted"/>plus-square-dotted</option>
                    <option value="bi-plus-square-fill"><i class="bi-plus-square-fill"/>plus-square-fill</option>
                    <option value="bi-postage"><i class="bi-postage"/>postage</option>
                    <option value="bi-postage-fill"><i class="bi-postage-fill"/>postage-fill</option>
                    <option value="bi-postage-heart"><i class="bi-postage-heart"/>postage-heart</option>
                    <option value="bi-postage-heart-fill"><i class="bi-postage-heart-fill"/>postage-heart-fill</option>
                    <option value="bi-postcard"><i class="bi-postcard"/>postcard</option>
                    <option value="bi-postcard-fill"><i class="bi-postcard-fill"/>postcard-fill</option>
                    <option value="bi-postcard-heart"><i class="bi-postcard-heart"/>postcard-heart</option>
                    <option value="bi-postcard-heart-fill"><i class="bi-postcard-heart-fill"/>postcard-heart-fill
                    </option>
                    <option value="bi-power"><i class="bi-power"/>power</option>
                    <option value="bi-printer"><i class="bi-printer"/>printer</option>
                    <option value="bi-printer-fill"><i class="bi-printer-fill"/>printer-fill</option>
                    <option value="bi-projector"><i class="bi-projector"/>projector</option>
                    <option value="bi-projector-fill"><i class="bi-projector-fill"/>projector-fill</option>
                    <option value="bi-puzzle"><i class="bi-puzzle"/>puzzle</option>
                    <option value="bi-puzzle-fill"><i class="bi-puzzle-fill"/>puzzle-fill</option>
                    <option value="bi-qr-code"><i class="bi-qr-code"/>qr-code</option>
                    <option value="bi-qr-code-scan"><i class="bi-qr-code-scan"/>qr-code-scan</option>
                    <option value="bi-question"><i class="bi-question"/>question</option>
                    <option value="bi-question-circle"><i class="bi-question-circle"/>question-circle</option>
                    <option value="bi-question-diamond"><i class="bi-question-diamond"/>question-diamond</option>
                    <option value="bi-question-diamond-fill"><i class="bi-question-diamond-fill"/>question-diamond-fill
                    </option>
                    <option value="bi-question-circle-fill"><i class="bi-question-circle-fill"/>question-circle-fill
                    </option>
                    <option value="bi-question-lg"><i class="bi-question-lg"/>question-lg</option>
                    <option value="bi-question-octagon"><i class="bi-question-octagon"/>question-octagon</option>
                    <option value="bi-question-octagon-fill"><i class="bi-question-octagon-fill"/>question-octagon-fill
                    </option>
                    <option value="bi-question-square"><i class="bi-question-square"/>question-square</option>
                    <option value="bi-question-square-fill"><i class="bi-question-square-fill"/>question-square-fill
                    </option>
                    <option value="bi-quora"><i class="bi-quora"/>quora</option>
                    <option value="bi-quote"><i class="bi-quote"/>quote</option>
                    <option value="bi-radioactive"><i class="bi-radioactive"/>radioactive</option>
                    <option value="bi-rainbow"><i class="bi-rainbow"/>rainbow</option>
                    <option value="bi-receipt"><i class="bi-receipt"/>receipt</option>
                    <option value="bi-receipt-cutoff"><i class="bi-receipt-cutoff"/>receipt-cutoff</option>
                    <option value="bi-reception-0"><i class="bi-reception-0"/>reception-0</option>
                    <option value="bi-reception-1"><i class="bi-reception-1"/>reception-1</option>
                    <option value="bi-reception-2"><i class="bi-reception-2"/>reception-2</option>
                    <option value="bi-reception-3"><i class="bi-reception-3"/>reception-3</option>
                    <option value="bi-reception-4"><i class="bi-reception-4"/>reception-4</option>
                    <option value="bi-record"><i class="bi-record"/>record</option>
                    <option value="bi-record-btn"><i class="bi-record-btn"/>record-btn</option>
                    <option value="bi-record-btn-fill"><i class="bi-record-btn-fill"/>record-btn-fill</option>
                    <option value="bi-record-circle"><i class="bi-record-circle"/>record-circle</option>
                    <option value="bi-record-circle-fill"><i class="bi-record-circle-fill"/>record-circle-fill</option>
                    <option value="bi-record-fill"><i class="bi-record-fill"/>record-fill</option>
                    <option value="bi-record2"><i class="bi-record2"/>record2</option>
                    <option value="bi-record2-fill"><i class="bi-record2-fill"/>record2-fill</option>
                    <option value="bi-recycle"><i class="bi-recycle"/>recycle</option>
                    <option value="bi-reddit"><i class="bi-reddit"/>reddit</option>
                    <option value="bi-reply"><i class="bi-reply"/>reply</option>
                    <option value="bi-reply-all"><i class="bi-reply-all"/>reply-all</option>
                    <option value="bi-reply-all-fill"><i class="bi-reply-all-fill"/>reply-all-fill</option>
                    <option value="bi-reply-fill"><i class="bi-reply-fill"/>reply-fill</option>
                    <option value="bi-robot"><i class="bi-robot"/>robot</option>
                    <option value="bi-router"><i class="bi-router"/>router</option>
                    <option value="bi-router-fill"><i class="bi-router-fill"/>router-fill</option>
                    <option value="bi-rss"><i class="bi-rss"/>rss</option>
                    <option value="bi-rss-fill"><i class="bi-rss-fill"/>rss-fill</option>
                    <option value="bi-rulers"><i class="bi-rulers"/>rulers</option>
                    <option value="bi-safe"><i class="bi-safe"/>safe</option>
                    <option value="bi-safe-fill"><i class="bi-safe-fill"/>safe-fill</option>
                    <option value="bi-safe2"><i class="bi-safe2"/>safe2</option>
                    <option value="bi-safe2-fill"><i class="bi-safe2-fill"/>safe2-fill</option>
                    <option value="bi-save"><i class="bi-save"/>save</option>
                    <option value="bi-save-fill"><i class="bi-save-fill"/>save-fill</option>
                    <option value="bi-save2"><i class="bi-save2"/>save2</option>
                    <option value="bi-save2-fill"><i class="bi-save2-fill"/>save2-fill</option>
                    <option value="bi-scissors"><i class="bi-scissors"/>scissors</option>
                    <option value="bi-screwdriver"><i class="bi-screwdriver"/>screwdriver</option>
                    <option value="bi-sd-card"><i class="bi-sd-card"/>sd-card</option>
                    <option value="bi-sd-card-fill"><i class="bi-sd-card-fill"/>sd-card-fill</option>
                    <option value="bi-search"><i class="bi-search"/>search</option>
                    <option value="bi-search-heart"><i class="bi-search-heart"/>search-heart</option>
                    <option value="bi-search-heart-fill"><i class="bi-search-heart-fill"/>search-heart-fill</option>
                    <option value="bi-segmented-nav"><i class="bi-segmented-nav"/>segmented-nav</option>
                    <option value="bi-send"><i class="bi-send"/>send</option>
                    <option value="bi-send-check"><i class="bi-send-check"/>send-check</option>
                    <option value="bi-send-check-fill"><i class="bi-send-check-fill"/>send-check-fill</option>
                    <option value="bi-send-dash"><i class="bi-send-dash"/>send-dash</option>
                    <option value="bi-send-dash-fill"><i class="bi-send-dash-fill"/>send-dash-fill</option>
                    <option value="bi-send-exclamation"><i class="bi-send-exclamation"/>send-exclamation</option>
                    <option value="bi-send-exclamation-fill"><i class="bi-send-exclamation-fill"/>send-exclamation-fill
                    </option>
                    <option value="bi-send-fill"><i class="bi-send-fill"/>send-fill</option>
                    <option value="bi-send-plus"><i class="bi-send-plus"/>send-plus</option>
                    <option value="bi-send-plus-fill"><i class="bi-send-plus-fill"/>send-plus-fill</option>
                    <option value="bi-send-slash"><i class="bi-send-slash"/>send-slash</option>
                    <option value="bi-send-slash-fill"><i class="bi-send-slash-fill"/>send-slash-fill</option>
                    <option value="bi-send-x"><i class="bi-send-x"/>send-x</option>
                    <option value="bi-send-x-fill"><i class="bi-send-x-fill"/>send-x-fill</option>
                    <option value="bi-server"><i class="bi-server"/>server</option>
                    <option value="bi-share"><i class="bi-share"/>share</option>
                    <option value="bi-share-fill"><i class="bi-share-fill"/>share-fill</option>
                    <option value="bi-shield"><i class="bi-shield"/>shield</option>
                    <option value="bi-shield-check"><i class="bi-shield-check"/>shield-check</option>
                    <option value="bi-shield-exclamation"><i class="bi-shield-exclamation"/>shield-exclamation</option>
                    <option value="bi-shield-fill"><i class="bi-shield-fill"/>shield-fill</option>
                    <option value="bi-shield-fill-check"><i class="bi-shield-fill-check"/>shield-fill-check</option>
                    <option value="bi-shield-fill-exclamation"><i class="bi-shield-fill-exclamation"/>shield-fill-exclamation
                    </option>
                    <option value="bi-shield-fill-minus"><i class="bi-shield-fill-minus"/>shield-fill-minus</option>
                    <option value="bi-shield-fill-plus"><i class="bi-shield-fill-plus"/>shield-fill-plus</option>
                    <option value="bi-shield-fill-x"><i class="bi-shield-fill-x"/>shield-fill-x</option>
                    <option value="bi-shield-lock"><i class="bi-shield-lock"/>shield-lock</option>
                    <option value="bi-shield-lock-fill"><i class="bi-shield-lock-fill"/>shield-lock-fill</option>
                    <option value="bi-shield-minus"><i class="bi-shield-minus"/>shield-minus</option>
                    <option value="bi-shield-plus"><i class="bi-shield-plus"/>shield-plus</option>
                    <option value="bi-shield-shaded"><i class="bi-shield-shaded"/>shield-shaded</option>
                    <option value="bi-shield-slash"><i class="bi-shield-slash"/>shield-slash</option>
                    <option value="bi-shield-slash-fill"><i class="bi-shield-slash-fill"/>shield-slash-fill</option>
                    <option value="bi-shield-x"><i class="bi-shield-x"/>shield-x</option>
                    <option value="bi-shift"><i class="bi-shift"/>shift</option>
                    <option value="bi-shift-fill"><i class="bi-shift-fill"/>shift-fill</option>
                    <option value="bi-shop"><i class="bi-shop"/>shop</option>
                    <option value="bi-shop-window"><i class="bi-shop-window"/>shop-window</option>
                    <option value="bi-shuffle"><i class="bi-shuffle"/>shuffle</option>
                    <option value="bi-signal"><i class="bi-signal"/>signal</option>
                    <option value="bi-signpost"><i class="bi-signpost"/>signpost</option>
                    <option value="bi-signpost-2"><i class="bi-signpost-2"/>signpost-2</option>
                    <option value="bi-signpost-2-fill"><i class="bi-signpost-2-fill"/>signpost-2-fill</option>
                    <option value="bi-signpost-fill"><i class="bi-signpost-fill"/>signpost-fill</option>
                    <option value="bi-signpost-split"><i class="bi-signpost-split"/>signpost-split</option>
                    <option value="bi-signpost-split-fill"><i class="bi-signpost-split-fill"/>signpost-split-fill
                    </option>
                    <option value="bi-sim"><i class="bi-sim"/>sim</option>
                    <option value="bi-sim-fill"><i class="bi-sim-fill"/>sim-fill</option>
                    <option value="bi-skip-backward"><i class="bi-skip-backward"/>skip-backward</option>
                    <option value="bi-skip-backward-btn"><i class="bi-skip-backward-btn"/>skip-backward-btn</option>
                    <option value="bi-skip-backward-btn-fill"><i class="bi-skip-backward-btn-fill"/>skip-backward-btn-fill
                    </option>
                    <option value="bi-skip-backward-circle"><i class="bi-skip-backward-circle"/>skip-backward-circle
                    </option>
                    <option value="bi-skip-backward-circle-fill"><i class="bi-skip-backward-circle-fill"/>skip-backward-circle-fill
                    </option>
                    <option value="bi-skip-backward-fill"><i class="bi-skip-backward-fill"/>skip-backward-fill</option>
                    <option value="bi-skip-end"><i class="bi-skip-end"/>skip-end</option>
                    <option value="bi-skip-end-btn"><i class="bi-skip-end-btn"/>skip-end-btn</option>
                    <option value="bi-skip-end-btn-fill"><i class="bi-skip-end-btn-fill"/>skip-end-btn-fill</option>
                    <option value="bi-skip-end-circle"><i class="bi-skip-end-circle"/>skip-end-circle</option>
                    <option value="bi-skip-end-circle-fill"><i class="bi-skip-end-circle-fill"/>skip-end-circle-fill
                    </option>
                    <option value="bi-skip-end-fill"><i class="bi-skip-end-fill"/>skip-end-fill</option>
                    <option value="bi-skip-forward"><i class="bi-skip-forward"/>skip-forward</option>
                    <option value="bi-skip-forward-btn"><i class="bi-skip-forward-btn"/>skip-forward-btn</option>
                    <option value="bi-skip-forward-btn-fill"><i class="bi-skip-forward-btn-fill"/>skip-forward-btn-fill
                    </option>
                    <option value="bi-skip-forward-circle"><i class="bi-skip-forward-circle"/>skip-forward-circle
                    </option>
                    <option value="bi-skip-forward-circle-fill"><i class="bi-skip-forward-circle-fill"/>skip-forward-circle-fill
                    </option>
                    <option value="bi-skip-forward-fill"><i class="bi-skip-forward-fill"/>skip-forward-fill</option>
                    <option value="bi-skip-start"><i class="bi-skip-start"/>skip-start</option>
                    <option value="bi-skip-start-btn"><i class="bi-skip-start-btn"/>skip-start-btn</option>
                    <option value="bi-skip-start-btn-fill"><i class="bi-skip-start-btn-fill"/>skip-start-btn-fill
                    </option>
                    <option value="bi-skip-start-circle"><i class="bi-skip-start-circle"/>skip-start-circle</option>
                    <option value="bi-skip-start-circle-fill"><i class="bi-skip-start-circle-fill"/>skip-start-circle-fill
                    </option>
                    <option value="bi-skip-start-fill"><i class="bi-skip-start-fill"/>skip-start-fill</option>
                    <option value="bi-skype"><i class="bi-skype"/>skype</option>
                    <option value="bi-slack"><i class="bi-slack"/>slack</option>
                    <option value="bi-slash"><i class="bi-slash"/>slash</option>
                    <option value="bi-slash-circle-fill"><i class="bi-slash-circle-fill"/>slash-circle-fill</option>
                    <option value="bi-slash-lg"><i class="bi-slash-lg"/>slash-lg</option>
                    <option value="bi-slash-square"><i class="bi-slash-square"/>slash-square</option>
                    <option value="bi-slash-square-fill"><i class="bi-slash-square-fill"/>slash-square-fill</option>
                    <option value="bi-sliders"><i class="bi-sliders"/>sliders</option>
                    <option value="bi-sliders2"><i class="bi-sliders2"/>sliders2</option>
                    <option value="bi-sliders2-vertical"><i class="bi-sliders2-vertical"/>sliders2-vertical</option>
                    <option value="bi-smartwatch"><i class="bi-smartwatch"/>smartwatch</option>
                    <option value="bi-snapchat"><i class="bi-snapchat"/>snapchat</option>
                    <option value="bi-snow"><i class="bi-snow"/>snow</option>
                    <option value="bi-snow2"><i class="bi-snow2"/>snow2</option>
                    <option value="bi-snow3"><i class="bi-snow3"/>snow3</option>
                    <option value="bi-sort-alpha-down"><i class="bi-sort-alpha-down"/>sort-alpha-down</option>
                    <option value="bi-sort-alpha-down-alt"><i class="bi-sort-alpha-down-alt"/>sort-alpha-down-alt
                    </option>
                    <option value="bi-sort-alpha-up"><i class="bi-sort-alpha-up"/>sort-alpha-up</option>
                    <option value="bi-sort-alpha-up-alt"><i class="bi-sort-alpha-up-alt"/>sort-alpha-up-alt</option>
                    <option value="bi-sort-down"><i class="bi-sort-down"/>sort-down</option>
                    <option value="bi-sort-down-alt"><i class="bi-sort-down-alt"/>sort-down-alt</option>
                    <option value="bi-sort-numeric-down"><i class="bi-sort-numeric-down"/>sort-numeric-down</option>
                    <option value="bi-sort-numeric-down-alt"><i class="bi-sort-numeric-down-alt"/>sort-numeric-down-alt
                    </option>
                    <option value="bi-sort-numeric-up"><i class="bi-sort-numeric-up"/>sort-numeric-up</option>
                    <option value="bi-sort-numeric-up-alt"><i class="bi-sort-numeric-up-alt"/>sort-numeric-up-alt
                    </option>
                    <option value="bi-sort-up"><i class="bi-sort-up"/>sort-up</option>
                    <option value="bi-sort-up-alt"><i class="bi-sort-up-alt"/>sort-up-alt</option>
                    <option value="bi-soundwave"><i class="bi-soundwave"/>soundwave</option>
                    <option value="bi-speaker"><i class="bi-speaker"/>speaker</option>
                    <option value="bi-speaker-fill"><i class="bi-speaker-fill"/>speaker-fill</option>
                    <option value="bi-speedometer"><i class="bi-speedometer"/>speedometer</option>
                    <option value="bi-speedometer2"><i class="bi-speedometer2"/>speedometer2</option>
                    <option value="bi-spellcheck"><i class="bi-spellcheck"/>spellcheck</option>
                    <option value="bi-spotify"><i class="bi-spotify"/>spotify</option>
                    <option value="bi-square"><i class="bi-square"/>square</option>
                    <option value="bi-square-fill"><i class="bi-square-fill"/>square-fill</option>
                    <option value="bi-square-half"><i class="bi-square-half"/>square-half</option>
                    <option value="bi-stack"><i class="bi-stack"/>stack</option>
                    <option value="bi-stack-overflow"><i class="bi-stack-overflow"/>stack-overflow</option>
                    <option value="bi-star"><i class="bi-star"/>star</option>
                    <option value="bi-star-fill"><i class="bi-star-fill"/>star-fill</option>
                    <option value="bi-star-half"><i class="bi-star-half"/>star-half</option>
                    <option value="bi-stars"><i class="bi-stars"/>stars</option>
                    <option value="bi-steam"><i class="bi-steam"/>steam</option>
                    <option value="bi-stickies"><i class="bi-stickies"/>stickies</option>
                    <option value="bi-stickies-fill"><i class="bi-stickies-fill"/>stickies-fill</option>
                    <option value="bi-sticky"><i class="bi-sticky"/>sticky</option>
                    <option value="bi-sticky-fill"><i class="bi-sticky-fill"/>sticky-fill</option>
                    <option value="bi-stop"><i class="bi-stop"/>stop</option>
                    <option value="bi-stop-btn"><i class="bi-stop-btn"/>stop-btn</option>
                    <option value="bi-stop-btn-fill"><i class="bi-stop-btn-fill"/>stop-btn-fill</option>
                    <option value="bi-stop-circle"><i class="bi-stop-circle"/>stop-circle</option>
                    <option value="bi-stop-circle-fill"><i class="bi-stop-circle-fill"/>stop-circle-fill</option>
                    <option value="bi-stop-fill"><i class="bi-stop-fill"/>stop-fill</option>
                    <option value="bi-stoplights"><i class="bi-stoplights"/>stoplights</option>
                    <option value="bi-stoplights-fill"><i class="bi-stoplights-fill"/>stoplights-fill</option>
                    <option value="bi-stopwatch"><i class="bi-stopwatch"/>stopwatch</option>
                    <option value="bi-stopwatch-fill"><i class="bi-stopwatch-fill"/>stopwatch-fill</option>
                    <option value="bi-strava"><i class="bi-strava"/>strava</option>
                    <option value="bi-subtract"><i class="bi-subtract"/>subtract</option>
                    <option value="bi-suit-club"><i class="bi-suit-club"/>suit-club</option>
                    <option value="bi-suit-club-fill"><i class="bi-suit-club-fill"/>suit-club-fill</option>
                    <option value="bi-suit-diamond"><i class="bi-suit-diamond"/>suit-diamond</option>
                    <option value="bi-suit-diamond-fill"><i class="bi-suit-diamond-fill"/>suit-diamond-fill</option>
                    <option value="bi-suit-heart"><i class="bi-suit-heart"/>suit-heart</option>
                    <option value="bi-suit-heart-fill"><i class="bi-suit-heart-fill"/>suit-heart-fill</option>
                    <option value="bi-suit-spade"><i class="bi-suit-spade"/>suit-spade</option>
                    <option value="bi-suit-spade-fill"><i class="bi-suit-spade-fill"/>suit-spade-fill</option>
                    <option value="bi-sun"><i class="bi-sun"/>sun</option>
                    <option value="bi-sun-fill"><i class="bi-sun-fill"/>sun-fill</option>
                    <option value="bi-sunglasses"><i class="bi-sunglasses"/>sunglasses</option>
                    <option value="bi-sunrise"><i class="bi-sunrise"/>sunrise</option>
                    <option value="bi-sunrise-fill"><i class="bi-sunrise-fill"/>sunrise-fill</option>
                    <option value="bi-sunset"><i class="bi-sunset"/>sunset</option>
                    <option value="bi-sunset-fill"><i class="bi-sunset-fill"/>sunset-fill</option>
                    <option value="bi-symmetry-horizontal"><i class="bi-symmetry-horizontal"/>symmetry-horizontal
                    </option>
                    <option value="bi-symmetry-vertical"><i class="bi-symmetry-vertical"/>symmetry-vertical</option>
                    <option value="bi-table"><i class="bi-table"/>table</option>
                    <option value="bi-tablet"><i class="bi-tablet"/>tablet</option>
                    <option value="bi-tablet-fill"><i class="bi-tablet-fill"/>tablet-fill</option>
                    <option value="bi-tablet-landscape"><i class="bi-tablet-landscape"/>tablet-landscape</option>
                    <option value="bi-tablet-landscape-fill"><i class="bi-tablet-landscape-fill"/>tablet-landscape-fill
                    </option>
                    <option value="bi-tag"><i class="bi-tag"/>tag</option>
                    <option value="bi-tag-fill"><i class="bi-tag-fill"/>tag-fill</option>
                    <option value="bi-tags"><i class="bi-tags"/>tags</option>
                    <option value="bi-tags-fill"><i class="bi-tags-fill"/>tags-fill</option>
                    <option value="bi-telegram"><i class="bi-telegram"/>telegram</option>
                    <option value="bi-telephone"><i class="bi-telephone"/>telephone</option>
                    <option value="bi-telephone-fill"><i class="bi-telephone-fill"/>telephone-fill</option>
                    <option value="bi-telephone-forward"><i class="bi-telephone-forward"/>telephone-forward</option>
                    <option value="bi-telephone-forward-fill"><i class="bi-telephone-forward-fill"/>telephone-forward-fill
                    </option>
                    <option value="bi-telephone-inbound"><i class="bi-telephone-inbound"/>telephone-inbound</option>
                    <option value="bi-telephone-inbound-fill"><i class="bi-telephone-inbound-fill"/>telephone-inbound-fill
                    </option>
                    <option value="bi-telephone-minus"><i class="bi-telephone-minus"/>telephone-minus</option>
                    <option value="bi-telephone-minus-fill"><i class="bi-telephone-minus-fill"/>telephone-minus-fill
                    </option>
                    <option value="bi-telephone-outbound"><i class="bi-telephone-outbound"/>telephone-outbound</option>
                    <option value="bi-telephone-outbound-fill"><i class="bi-telephone-outbound-fill"/>telephone-outbound-fill
                    </option>
                    <option value="bi-telephone-plus"><i class="bi-telephone-plus"/>telephone-plus</option>
                    <option value="bi-telephone-plus-fill"><i class="bi-telephone-plus-fill"/>telephone-plus-fill
                    </option>
                    <option value="bi-telephone-x"><i class="bi-telephone-x"/>telephone-x</option>
                    <option value="bi-telephone-x-fill"><i class="bi-telephone-x-fill"/>telephone-x-fill</option>
                    <option value="bi-terminal"><i class="bi-terminal"/>terminal</option>
                    <option value="bi-terminal-dash"><i class="bi-terminal-dash"/>terminal-dash</option>
                    <option value="bi-terminal-fill"><i class="bi-terminal-fill"/>terminal-fill</option>
                    <option value="bi-terminal-plus"><i class="bi-terminal-plus"/>terminal-plus</option>
                    <option value="bi-terminal-split"><i class="bi-terminal-split"/>terminal-split</option>
                    <option value="bi-terminal-x"><i class="bi-terminal-x"/>terminal-x</option>
                    <option value="bi-text-center"><i class="bi-text-center"/>text-center</option>
                    <option value="bi-text-indent-left"><i class="bi-text-indent-left"/>text-indent-left</option>
                    <option value="bi-text-indent-right"><i class="bi-text-indent-right"/>text-indent-right</option>
                    <option value="bi-text-left"><i class="bi-text-left"/>text-left</option>
                    <option value="bi-text-paragraph"><i class="bi-text-paragraph"/>text-paragraph</option>
                    <option value="bi-text-right"><i class="bi-text-right"/>text-right</option>
                    <option value="bi-textarea"><i class="bi-textarea"/>textarea</option>
                    <option value="bi-textarea-resize"><i class="bi-textarea-resize"/>textarea-resize</option>
                    <option value="bi-textarea-t"><i class="bi-textarea-t"/>textarea-t</option>
                    <option value="bi-thermometer"><i class="bi-thermometer"/>thermometer</option>
                    <option value="bi-thermometer-half"><i class="bi-thermometer-half"/>thermometer-half</option>
                    <option value="bi-thermometer-high"><i class="bi-thermometer-high"/>thermometer-high</option>
                    <option value="bi-thermometer-low"><i class="bi-thermometer-low"/>thermometer-low</option>
                    <option value="bi-thermometer-snow"><i class="bi-thermometer-snow"/>thermometer-snow</option>
                    <option value="bi-thermometer-sun"><i class="bi-thermometer-sun"/>thermometer-sun</option>
                    <option value="bi-three-dots"><i class="bi-three-dots"/>three-dots</option>
                    <option value="bi-three-dots-vertical"><i class="bi-three-dots-vertical"/>three-dots-vertical
                    </option>
                    <option value="bi-thunderbolt"><i class="bi-thunderbolt"/>thunderbolt</option>
                    <option value="bi-thunderbolt-fill"><i class="bi-thunderbolt-fill"/>thunderbolt-fill</option>
                    <option value="bi-ticket"><i class="bi-ticket"/>ticket</option>
                    <option value="bi-ticket-detailed"><i class="bi-ticket-detailed"/>ticket-detailed</option>
                    <option value="bi-ticket-detailed-fill"><i class="bi-ticket-detailed-fill"/>ticket-detailed-fill
                    </option>
                    <option value="bi-ticket-fill"><i class="bi-ticket-fill"/>ticket-fill</option>
                    <option value="bi-ticket-perforated"><i class="bi-ticket-perforated"/>ticket-perforated</option>
                    <option value="bi-ticket-perforated-fill"><i class="bi-ticket-perforated-fill"/>ticket-perforated-fill
                    </option>
                    <option value="bi-tiktok"><i class="bi-tiktok"/>tiktok</option>
                    <option value="bi-toggle-off"><i class="bi-toggle-off"/>toggle-off</option>
                    <option value="bi-toggle-on"><i class="bi-toggle-on"/>toggle-on</option>
                    <option value="bi-toggle2-off"><i class="bi-toggle2-off"/>toggle2-off</option>
                    <option value="bi-toggle2-on"><i class="bi-toggle2-on"/>toggle2-on</option>
                    <option value="bi-toggles"><i class="bi-toggles"/>toggles</option>
                    <option value="bi-toggles2"><i class="bi-toggles2"/>toggles2</option>
                    <option value="bi-tools"><i class="bi-tools"/>tools</option>
                    <option value="bi-tornado"><i class="bi-tornado"/>tornado</option>
                    <option value="bi-translate"><i class="bi-translate"/>translate</option>
                    <option value="bi-trash"><i class="bi-trash"/>trash</option>
                    <option value="bi-trash-fill"><i class="bi-trash-fill"/>trash-fill</option>
                    <option value="bi-trash2"><i class="bi-trash2"/>trash2</option>
                    <option value="bi-trash2-fill"><i class="bi-trash2-fill"/>trash2-fill</option>
                    <option value="bi-trash3"><i class="bi-trash3"/>trash3</option>
                    <option value="bi-trash3-fill"><i class="bi-trash3-fill"/>trash3-fill</option>
                    <option value="bi-tree"><i class="bi-tree"/>tree</option>
                    <option value="bi-tree-fill"><i class="bi-tree-fill"/>tree-fill</option>
                    <option value="bi-triangle"><i class="bi-triangle"/>triangle</option>
                    <option value="bi-triangle-fill"><i class="bi-triangle-fill"/>triangle-fill</option>
                    <option value="bi-triangle-half"><i class="bi-triangle-half"/>triangle-half</option>
                    <option value="bi-trophy"><i class="bi-trophy"/>trophy</option>
                    <option value="bi-trophy-fill"><i class="bi-trophy-fill"/>trophy-fill</option>
                    <option value="bi-tropical-storm"><i class="bi-tropical-storm"/>tropical-storm</option>
                    <option value="bi-truck"><i class="bi-truck"/>truck</option>
                    <option value="bi-truck-flatbed"><i class="bi-truck-flatbed"/>truck-flatbed</option>
                    <option value="bi-tsunami"><i class="bi-tsunami"/>tsunami</option>
                    <option value="bi-tv"><i class="bi-tv"/>tv</option>
                    <option value="bi-tv-fill"><i class="bi-tv-fill"/>tv-fill</option>
                    <option value="bi-twitch"><i class="bi-twitch"/>twitch</option>
                    <option value="bi-twitter"><i class="bi-twitter"/>twitter</option>
                    <option value="bi-type"><i class="bi-type"/>type</option>
                    <option value="bi-type-bold"><i class="bi-type-bold"/>type-bold</option>
                    <option value="bi-type-h1"><i class="bi-type-h1"/>type-h1</option>
                    <option value="bi-type-h2"><i class="bi-type-h2"/>type-h2</option>
                    <option value="bi-type-h3"><i class="bi-type-h3"/>type-h3</option>
                    <option value="bi-type-italic"><i class="bi-type-italic"/>type-italic</option>
                    <option value="bi-type-strikethrough"><i class="bi-type-strikethrough"/>type-strikethrough</option>
                    <option value="bi-type-underline"><i class="bi-type-underline"/>type-underline</option>
                    <option value="bi-ui-checks"><i class="bi-ui-checks"/>ui-checks</option>
                    <option value="bi-ui-checks-grid"><i class="bi-ui-checks-grid"/>ui-checks-grid</option>
                    <option value="bi-ui-radios"><i class="bi-ui-radios"/>ui-radios</option>
                    <option value="bi-ui-radios-grid"><i class="bi-ui-radios-grid"/>ui-radios-grid</option>
                    <option value="bi-umbrella"><i class="bi-umbrella"/>umbrella</option>
                    <option value="bi-umbrella-fill"><i class="bi-umbrella-fill"/>umbrella-fill</option>
                    <option value="bi-union"><i class="bi-union"/>union</option>
                    <option value="bi-unlock"><i class="bi-unlock"/>unlock</option>
                    <option value="bi-unlock-fill"><i class="bi-unlock-fill"/>unlock-fill</option>
                    <option value="bi-upc"><i class="bi-upc"/>upc</option>
                    <option value="bi-upc-scan"><i class="bi-upc-scan"/>upc-scan</option>
                    <option value="bi-upload"><i class="bi-upload"/>upload</option>
                    <option value="bi-usb"><i class="bi-usb"/>usb</option>
                    <option value="bi-usb-c"><i class="bi-usb-c"/>usb-c</option>
                    <option value="bi-usb-c-fill"><i class="bi-usb-c-fill"/>usb-c-fill</option>
                    <option value="bi-usb-drive"><i class="bi-usb-drive"/>usb-drive</option>
                    <option value="bi-usb-drive-fill"><i class="bi-usb-drive-fill"/>usb-drive-fill</option>
                    <option value="bi-usb-fill"><i class="bi-usb-fill"/>usb-fill</option>
                    <option value="bi-usb-micro"><i class="bi-usb-micro"/>usb-micro</option>
                    <option value="bi-usb-micro-fill"><i class="bi-usb-micro-fill"/>usb-micro-fill</option>
                    <option value="bi-usb-mini"><i class="bi-usb-mini"/>usb-mini</option>
                    <option value="bi-usb-mini-fill"><i class="bi-usb-mini-fill"/>usb-mini-fill</option>
                    <option value="bi-usb-plug"><i class="bi-usb-plug"/>usb-plug</option>
                    <option value="bi-usb-plug-fill"><i class="bi-usb-plug-fill"/>usb-plug-fill</option>
                    <option value="bi-usb-symbol"><i class="bi-usb-symbol"/>usb-symbol</option>
                    <option value="bi-valentine"><i class="bi-valentine"/>valentine</option>
                    <option value="bi-valentine2"><i class="bi-valentine2"/>valentine2</option>
                    <option value="bi-vector-pen"><i class="bi-vector-pen"/>vector-pen</option>
                    <option value="bi-view-list"><i class="bi-view-list"/>view-list</option>
                    <option value="bi-view-stacked"><i class="bi-view-stacked"/>view-stacked</option>
                    <option value="bi-vimeo"><i class="bi-vimeo"/>vimeo</option>
                    <option value="bi-vinyl"><i class="bi-vinyl"/>vinyl</option>
                    <option value="bi-vinyl-fill"><i class="bi-vinyl-fill"/>vinyl-fill</option>
                    <option value="bi-voicemail"><i class="bi-voicemail"/>voicemail</option>
                    <option value="bi-volume-down"><i class="bi-volume-down"/>volume-down</option>
                    <option value="bi-volume-down-fill"><i class="bi-volume-down-fill"/>volume-down-fill</option>
                    <option value="bi-volume-mute"><i class="bi-volume-mute"/>volume-mute</option>
                    <option value="bi-volume-mute-fill"><i class="bi-volume-mute-fill"/>volume-mute-fill</option>
                    <option value="bi-volume-off"><i class="bi-volume-off"/>volume-off</option>
                    <option value="bi-volume-off-fill"><i class="bi-volume-off-fill"/>volume-off-fill</option>
                    <option value="bi-volume-up"><i class="bi-volume-up"/>volume-up</option>
                    <option value="bi-volume-up-fill"><i class="bi-volume-up-fill"/>volume-up-fill</option>
                    <option value="bi-vr"><i class="bi-vr"/>vr</option>
                    <option value="bi-wallet"><i class="bi-wallet"/>wallet</option>
                    <option value="bi-wallet-fill"><i class="bi-wallet-fill"/>wallet-fill</option>
                    <option value="bi-wallet2"><i class="bi-wallet2"/>wallet2</option>
                    <option value="bi-watch"><i class="bi-watch"/>watch</option>
                    <option value="bi-water"><i class="bi-water"/>water</option>
                    <option value="bi-webcam"><i class="bi-webcam"/>webcam</option>
                    <option value="bi-webcam-fill"><i class="bi-webcam-fill"/>webcam-fill</option>
                    <option value="bi-whatsapp"><i class="bi-whatsapp"/>whatsapp</option>
                    <option value="bi-wifi"><i class="bi-wifi"/>wifi</option>
                    <option value="bi-wifi-1"><i class="bi-wifi-1"/>wifi-1</option>
                    <option value="bi-wifi-2"><i class="bi-wifi-2"/>wifi-2</option>
                    <option value="bi-wifi-off"><i class="bi-wifi-off"/>wifi-off</option>
                    <option value="bi-wind"><i class="bi-wind"/>wind</option>
                    <option value="bi-window"><i class="bi-window"/>window</option>
                    <option value="bi-window-dash"><i class="bi-window-dash"/>window-dash</option>
                    <option value="bi-window-desktop"><i class="bi-window-desktop"/>window-desktop</option>
                    <option value="bi-window-dock"><i class="bi-window-dock"/>window-dock</option>
                    <option value="bi-window-fullscreen"><i class="bi-window-fullscreen"/>window-fullscreen</option>
                    <option value="bi-window-plus"><i class="bi-window-plus"/>window-plus</option>
                    <option value="bi-window-sidebar"><i class="bi-window-sidebar"/>window-sidebar</option>
                    <option value="bi-window-split"><i class="bi-window-split"/>window-split</option>
                    <option value="bi-window-stack"><i class="bi-window-stack"/>window-stack</option>
                    <option value="bi-window-x"><i class="bi-window-x"/>window-x</option>
                    <option value="bi-windows"><i class="bi-windows"/>windows</option>
                    <option value="bi-wordpress"><i class="bi-wordpress"/>wordpress</option>
                    <option value="bi-wrench"><i class="bi-wrench"/>wrench</option>
                    <option value="bi-wrench-adjustable"><i class="bi-wrench-adjustable"/>wrench-adjustable</option>
                    <option value="bi-wrench-adjustable-circle"><i class="bi-wrench-adjustable-circle"/>wrench-adjustable-circle
                    </option>
                    <option value="bi-wrench-adjustable-circle-fill"><i class="bi-wrench-adjustable-circle-fill"/>wrench-adjustable-circle-fill
                    </option>
                    <option value="bi-x"><i class="bi-x"/>x</option>
                    <option value="bi-x-circle"><i class="bi-x-circle"/>x-circle</option>
                    <option value="bi-x-circle-fill"><i class="bi-x-circle-fill"/>x-circle-fill</option>
                    <option value="bi-x-diamond"><i class="bi-x-diamond"/>x-diamond</option>
                    <option value="bi-x-diamond-fill"><i class="bi-x-diamond-fill"/>x-diamond-fill</option>
                    <option value="bi-x-lg"><i class="bi-x-lg"/>x-lg</option>
                    <option value="bi-x-octagon"><i class="bi-x-octagon"/>x-octagon</option>
                    <option value="bi-x-octagon-fill"><i class="bi-x-octagon-fill"/>x-octagon-fill</option>
                    <option value="bi-x-square"><i class="bi-x-square"/>x-square</option>
                    <option value="bi-x-square-fill"><i class="bi-x-square-fill"/>x-square-fill</option>
                    <option value="bi-xbox"><i class="bi-xbox"/>xbox</option>
                    <option value="bi-yin-yang"><i class="bi-yin-yang"/>yin-yang</option>
                    <option value="bi-youtube"><i class="bi-youtube"/>youtube</option>
                    <option value="bi-zoom-in"><i class="bi-zoom-in"/>zoom-in</option>
                    <option value="bi-zoom-out"><i class="bi-zoom-out"/>zoom-out</option>

                </select>
                <div class="alert alert-primary mt-3" role="alert">See <a href="https://icons.getbootstrap.com/"
                                                                          target="_blank">Bootstrap
                    Icons documentation</a> for examples.
                </div>

            </div>
        </div>
        <div class="row w-75 mx-auto my-3 h-50">
            <div class="col-md-12">
                <label for="slug">Body</label>
                <ckeditor v-model="form.body" :config="editorConfig" :editor="editor"></ckeditor>
            </div>
        </div>
        <div class="row w-75 mx-auto justify-content-left">
            <div class="col-auto">
                <button class="btn w-100 green-btn my-3" type="submit">Submit</button>
            </div>

        </div>
    </form>


</template>

<script setup>

import {useForm} from "@inertiajs/inertia-vue3"

let props = defineProps({
    page: {
        type: Object,
    }
})
let form = useForm({
    title: props.page.title,
    slug: props.page.slug,
    body: props.page.body,
    icon: props.page.icon
});

let submit = () => {
    form.patch('/admin/pages/' + props.page.id)
    form.reset()

}

</script>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


let xsrf = $('meta[name="csrf-token"]').attr('content')


class MyUploadAdapter {
    constructor(loader) {
        // The file loader instance to use during the upload. It sounds scary but do not
        // worry — the loader will be passed into the adapter later on in this guide.
        this.loader = loader;
    }

    // Starts the upload process.
    upload() {
        return this.loader.file
            .then(file => new Promise((resolve, reject) => {
                this._initRequest();
                this._initListeners(resolve, reject, file);
                this._sendRequest(file);
            }));
    }

    // Aborts the upload process.
    abort() {
        if (this.xhr) {
            this.xhr.abort();
        }
    }

    _initRequest() {
        const xhr = this.xhr = new XMLHttpRequest();

        // Note that your request may look different. It is up to you and your editor
        // integration to choose the right communication channel. This example uses
        // a POST request with JSON as a data structure but your configuration
        // could be different.
        xhr.open('POST', '/ckeditor/upload', true);
        xhr.setRequestHeader('x-csrf-token', xsrf)
        xhr.responseType = 'json';
    }

    // Initializes XMLHttpRequest listeners.
    _initListeners(resolve, reject, file) {
        const xhr = this.xhr;
        const loader = this.loader;
        const genericErrorText = `Couldn't upload file: ${file.name}.`;

        xhr.addEventListener('error', () => reject(genericErrorText));
        xhr.addEventListener('abort', () => reject());
        xhr.addEventListener('load', () => {
            const response = xhr.response;

            // This example assumes the XHR server's "response" object will come with
            // an "error" which has its own "message" that can be passed to reject()
            // in the upload promise.
            //
            // Your integration may handle upload errors in a different way so make sure
            // it is done properly. The reject() function must be called when the upload fails.
            if (!response || response.error) {
                return reject(response && response.error ? response.error.message : genericErrorText);
            }

            // If the upload is successful, resolve the upload promise with an object containing
            // at least the "default" URL, pointing to the image on the server.
            // This URL will be used to display the image in the content. Learn more in the
            // UploadAdapter#upload documentation.
            resolve({
                default: response.url
            });
        });

        // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
        // properties which are used e.g. to display the upload progress bar in the editor
        // user interface.
        if (xhr.upload) {
            xhr.upload.addEventListener('progress', evt => {
                if (evt.lengthComputable) {
                    loader.uploadTotal = evt.total;
                    loader.uploaded = evt.loaded;
                }
            });
        }
    }

    // Prepares the data and sends the request.
    _sendRequest(file) {
        // Prepare the form data.
        const data = new FormData();

        data.append('upload', file);

        // Important note: This is the right place to implement security mechanisms
        // like authentication and CSRF protection. For instance, you can use
        // XMLHttpRequest.setRequestHeader() to set the request headers containing
        // the CSRF token generated earlier by your application.

        // Send the request.
        this.xhr.send(data);
    }


    // ...
}

function CustomUploadAdapterPlugin(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
        return new MyUploadAdapter(loader);
    };
}

function getCookie(name) {
    // Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");
    // Loop through the array elements
    for (var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if (name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return decodeURIComponent(cookiePair[1]);
        }
    }
    // Return null if not found
    return null;
}

export default {


    data() {
        return {

            editor: ClassicEditor,
            editorData: '<p>Content of the editor.</p>',
            editorConfig: {
                extraPlugins: [CustomUploadAdapterPlugin],
                // The configuration of the editor.
            },
        };
    }
}


</script>

<style scoped>

</style>
