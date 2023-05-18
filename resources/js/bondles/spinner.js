let spinner = document.querySelector('[m-spinner]')
if (spinner) start(spinner)

function start (spinner) {
    let timeout = spinner.getAttribute('data-timeout')
    let div = document.createElement('div')
    div.classList.add('m_spinner-wave')
    spinner.classList.add('m_spinner')
    spinner.style.display = 'flex'

    for (let i = 0; i <= 5; i++) {
        spinner.append(div.cloneNode())
    }

    toggleElements(spinner.parentElement.children, false, 'm-spinner')

    document.addEventListener('DOMContentLoaded', function () {
        elementsLoaded(timeout ? timeout : 1000)
    })
}

function elementsLoaded (timeout) {
    setTimeout(function () {
        toggleElements(spinner.parentElement.children, true, 'm-spinner')
        spinner.style.display = 'none'
    }, timeout)
}

function toggleElements (elements, display = null, exceptAttribute = null) {
    for (let i = 0; i <= elements.length; i++) {
        let element = elements[i]

        if (!element) continue

        if (exceptAttribute && !element.hasAttribute(exceptAttribute)) {
            if (display !== null) {
                element.style.display = display ? 'block' : 'none'
            } else {
                element.style.display = element.style.display === 'none' ? 'block' : 'none'
            }
        }
    }
}
