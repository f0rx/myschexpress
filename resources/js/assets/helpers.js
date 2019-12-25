let helpers = {
    slugify: (str, seperator) => {
        seperator = typeof seperator != "undefined" ? seperator : "-";

        str = str.trim();
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        const from = "åàáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
        const to = "aaaaaaeeeeiiiioooouuuunc------";

        for (let i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
        }

        return str
            .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
            .replace(/\s+/g, seperator) // collapse whitespace and replace by -
            .replace(/-+/g, seperator) // collapse dashes
            .replace(/^-+/, "") // trim - from start of text
            .replace(/-+$/, "") // trim - from end of text
            .replace(/-/g, seperator);
    }
};

export default helpers;
