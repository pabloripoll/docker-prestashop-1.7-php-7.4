// Plugin core js
const PrCustom = {
    ajaxUrl: '/wp-admin/admin-ajax.php', // Wordpress default
    ajaxWpCall: 'pr_custom_admin_ajax', // plugin ajax identifier
    ajaxWpNonce: nonce, // secutiry

    // ajax payload constants for any request
    ajaxPayload(payload) {
        payload.nonce = this.ajaxWpNonce,
        payload.action = this.ajaxWpCall

        return payload
    },

    // plugin ajax call to backend actions
    async ajaxBackend(method, payload = {}) {
        return $.ajax({url: this.ajaxUrl, type: method, data: payload})
    },

    async ajaxGet(payload = {}) {
        return this.ajaxBackend('GET', this.ajaxPayload(payload))
    },

    async ajaxPost(payload = {}) {
        return this.ajaxBackend('POST', this.ajaxPayload(payload))
    },

    // SPA dynamic content
    async ajaxContent(payload = {}) {
        return $.ajax({url: this.ajaxUrl, type: 'POST', data: this.ajaxPayload(payload), dataType: 'html'})
    },
}

const hashMix = (length, type = 'mix') => {
    let characters = '', charactersLength = 0, hash = '';

    if (type == 'integer') {
        characters = '0123456789'
    }
    if (type == 'mix') {
        characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
    }
    if (type == 'password') {
        characters = '·~¡!#$%&=¿?@ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
    }

    charactersLength = characters.length;
    for (let i = 0; i < length; i++) hash += characters.charAt(Math.floor(Math.random() * charactersLength));

    return hash
}