// View - Async Content
function sectionContent(view, payload = {}) {

    payload.view = view

    PrCustom.ajaxContent(payload).then((response) => {

        $('#section-content').html(response)
        insertSectionScripts()

    }).catch((error) => {
        $('#section-content').html(error)
    })
}

// Page Navigation Bar
let pagelink = $('.spapage')

pagelink.on('click', function(event) {
    pagelink.each(function() {
        $(this).removeClass(`current`)
    })
    event.stopPropagation()
    event.stopImmediatePropagation()

    let elem = $(this)

    elem.addClass(`current`)

    section = elem.data().target // section is let on template html

    sectionContent(`/view/${page}/${section}`)
})

//
function removeSectionScripts() {
    document.querySelectorAll('.section-scripts').forEach(e => e.remove());
}

function insertSectionScripts() {
    removeSectionScripts()
    if (section_scripts && section_scripts.length > 0) {
        section_scripts.forEach(script => {
            if (script != '') {
                let elem, scriptId, scriptFn;

                if (typeof script === 'string' || ! script instanceof String) {
                    scriptId = script
                } else {
                    script   = Object.entries(script)[0]
                    scriptFn = `${script[1]}`
                    script   = script[0]
                }

                elem = document.createElement('script')
                elem.type  = 'text/javascript'
                elem.async = false
                elem.className = 'section-scripts'
                elem.src   = script.split('http').length == 1 ? `${jsAdmin}${script}?${hashMix(5)}` : `${script}`

                elem.onerror = () => {
                    //console.error(`An error has occurred while loading script: ${script}`)
                }
                if (scriptFn) {
                    elem.onload  = () => {
                        let initFn = new Function(scriptFn); initFn()
                    }
                }
                document.body.appendChild(elem)
            }
        })
    }
    section_scripts = JSON.parse('{}') // mandatory
}