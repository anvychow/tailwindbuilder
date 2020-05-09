<div>
    <div x-data="{
                    modal: false,
                    component: null,
                    editor: null,
                    openModal() {
                        const t = this;
                        this.editor = ace.edit(this.$refs.editor);
                        this.editor.setTheme('ace/theme/monokai');
                        this.editor.session.setMode('ace/mode/javascript');
                        this.modal = true;
                    },
                    closeModal() {
                        @this.set('html', this.editor.getValue());
                        this.editor.destroy();
                        this.modal = false;
                    },
                }">
        <x-modal>
            {{$html}}
        </x-modal>

        <div class="relative z-10">
            <x-buttons></x-buttons>
            <div class="relative z-0">
                {!! $html !!}
            </div>
        </div>
    </div>
</div>