import { ref } from "vue";
import { defineStore } from "pinia";

export const useContainerStore = defineStore(
    "container",
    () => {
        const initialState = {
            page: 1,
            name: "",
            config: "",
            id: "",
            gtm_id: "",
            location: "",
            plan: "",
            billing_period: 1,
            plan_autoupgrade: 0,
            domain: "",
            subdomain: "",
        };
        const container = ref({ ...initialState });

        const update = (value) => {
            container.value = { ...container.value, ...value };
        };

        const reset = () => {
            container.value = {
                ...initialState,
            };
        };

        return {
            container,
            update,
            reset,
        };
    },
    {
        persist: true,
    }
);
