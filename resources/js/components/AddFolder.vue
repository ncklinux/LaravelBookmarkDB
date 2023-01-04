<template>
    <div class="card">
        <div class="card-header">{{ this.language.title }}</div>
        <div class="card-body">
            <div class="container p-0">
                <div class="row mb-2">
                    <div class="col">
                        <label for="colorInput" class="form-label">{{
                            this.language.color
                        }}</label>
                        <input
                            type="color"
                            class="form-control form-control-color"
                            id="colorInput"
                            value="#FFFFFF"
                        />
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"
                                ><i class="bi bi-folder"></i
                            ></span>
                            <input
                                type="text"
                                class="form-control"
                                :placeholder="this.language.folder"
                                aria-describedby="basic-addon1"
                            />
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2"
                                ><i class="bi bi-type"></i
                            ></span>
                            <textarea
                                class="form-control"
                                :placeholder="this.language.description"
                                aria-describedby="basic-addon2"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">
                            <i class="bi bi-plus"></i>
                            {{ this.language.button }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
export default {
    props: {
        language: Object,
    },
    data() {
        return {};
    },
    mounted() {
        //console.log("LANG: ", this.lang);
    },
    methods: {},
};
</script>
<style lang="scss" scoped></style>
