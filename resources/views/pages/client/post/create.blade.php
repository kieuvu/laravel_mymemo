@extends("layouts.main")
@section("content")
<div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8 mt-3">
    <form id="postCreate" action="{{route('client.post.creat.process')}}" method="POST" enctype="multipart/form-data"
        class="space-y-8 ">
        @csrf
        <div class="space-y-8 sm:space-y-5">
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Getting Started
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        This information will be displayed publicly so be careful what you share.
                    </p>
                </div>

                <div class="mt-6 sm:mt-5 space-y-3 sm:space-y-2 sm:border-t sm:border-gray-200">
                    <div x-data="showImage()" class="flex items-center justify-center  ">
                        <div class="bg-white rounded-lg shadow-xl md:w-9/12 lg:w-1/2">
                            <div class="m-4">
                                <label class="inline-block m-0 text-gray-500">Choose Image (JPG, PNG,
                                    GIF...)</label>
                                @if($errors->has('image'))
                                <span class="text-danger mb-1 d-block">{{$errors->first('image')}}</span>
                                @endif
                                <div class="flex items-center justify-center w-full">
                                    <label
                                        class="flex flex-col w-full h-64 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                        <div class="relative flex flex-col items-center justify-center h-64">
                                            <img id="preview" class="absolute inset-0 w-full h-64 object-cover">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-12 h-12 text-gray-400 group-hover:text-gray-600"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <p
                                                class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                Select a photo</p>
                                        </div>
                                        <input type="file" class="opacity-0" name="image" accept="image/*"
                                            @change="showPreview(event)" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Image Information
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Use a permanent address where you can receive mail.
                    </p>
                </div>
                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Title:
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input
                                class="shadow-sm border rounded-md w-full py-2 px-3  sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 leading-tight focus:outline-none focus:shadow-outline"
                                id="title" placeholder="Title here" name="title">
                            @if($errors->has('title'))
                            <span class="text-danger mt-2 d-block">{{$errors->first('title')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Tags:
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div x-data data-tags='[]'>
                                <div x-data="tagSelect()" x-init="init('parentEl')">
                                    <div class="relative" @keydown.enter.prevent="addTag(textInput)">
                                        <input x-model="textInput" x-ref="textInput"
                                            class="shadow-sm border rounded-md w-full py-2 px-3  sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 leading-tight focus:outline-none focus:shadow-outline"
                                            id="tags" placeholder="Tags here">
                                        @if($errors->has('tags'))
                                        <span class="text-danger mt-2 d-block">{{$errors->first('tags')}}</span>
                                        @endif
                                        <template x-for="(tag, index) in tags">
                                            <div
                                                class="bg-indigo-100 inline-flex items-center text-sm rounded mt-2 mr-1">
                                                <span class="tag_name ml-2 mr-1 leading-relaxed truncate max-w-xs"
                                                    x-text="tag"></span>
                                                <button @click.prevent="removeTag(index)"
                                                    class="w-6 h-8 inline-block align-middle text-gray-500 hover:text-gray-600 focus:outline-none">
                                                    <svg class="w-6 h-6 fill-current mx-auto"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-6  sm:space-y-5 sm:border-t sm:border-gray-200" style="margin-top:20px">
            <div class="space-y-6 sm:space-y-5">
                <div class="pt-6 sm:pt-5">
                    <div role="group" aria-labelledby="label-notifications">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                            <div>
                                <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                    id="label-notifications">
                                    Post Status
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="max-w-lg">
                                    <p class="text-sm text-gray-500">These are delivered via SMS to your mobile
                                        phone.</p>
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-center">
                                            <input id="hidden" name="hidden" type="checkbox"
                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                            <label for="hidden"
                                                class="m-0 ml-2 block text-sm font-medium text-gray-700">
                                                Hidden
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 pb-5">
            <div class="flex justify-end">
                <button id="submit" type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create
                </button>
            </div>
        </div>
    </form>
</div>
@stop

@section("scripts")
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<script>
    function showImage() {
        return {
            showPreview(event) {
                if (event.target.files.length > 0) {
                    const src = URL.createObjectURL(event.target.files[0]);
                    const preview = document.getElementById("preview");
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
        }
    }

    function tagSelect() {
        return {
            open: false,
            textInput: '',
            tags: [],
            init() {
                this.tags = JSON.parse(this.$el.parentNode.getAttribute('data-tags'));
            },
            addTag(tag) {
                tag = tag.trim()
                if (tag != "" && !this.hasTag(tag)) {
                    this.tags.push(tag)
                }
                this.clearSearch()
                this.$refs.textInput.focus()
                this.fireTagsUpdateEvent()
            },
            fireTagsUpdateEvent() {
                this.$el.dispatchEvent(new CustomEvent('tags-update', {
                    detail: {tags: this.tags},
                    bubbles: true,
                }));
            },
            hasTag(tag) {
                var tag = this.tags.find(e => {
                    return e.toLowerCase() === tag.toLowerCase()
                })
                return tag != undefined
            },
            removeTag(index) {
                this.tags.splice(index, 1)
                this.fireTagsUpdateEvent()
            },
            search(q) {
                if (q.includes(",")) {
                    q.split(",").forEach(function (val) {
                        this.addTag(val)
                    }, this)
                }
                this.toggleSearch()
            },
            clearSearch() {
                this.textInput = ''
                this.toggleSearch()
            },
            toggleSearch() {
                this.open = this.textInput != ''
            }
        }
    }

    $("#postCreate").submit(function(e){
        let arr = [];
        let tags = ""
        $.each($(".tag_name"), function (index, item) {
            arr.push(item.innerText);
        });

        if(arr.length > 0) {
            tags = JSON.stringify(arr);
        }


        $("#postCreate").append(
            `
                <input type="text" value='${tags}' hidden name="tags" />
            `
        )
    })

    $("#submit").click(function (e) {
        $("#postCreate").submit();
    });
</script>
@stop