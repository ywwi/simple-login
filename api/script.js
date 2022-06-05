const inputs = document.querySelectorAll('.input')

const focus = ({ target }) =>
{
    const span = target.previousElementSibling
    span.classList.add('spanFocus')
}

const focusOut = ({ target }) =>
{
    if(target.value === "")
    {
        const span = target.previousElementSibling
        span.classList.remove('spanFocus')
    }
}

inputs.forEach(input => input.addEventListener('focus', focus))
inputs.forEach(input => input.addEventListener('focusout', focusOut))