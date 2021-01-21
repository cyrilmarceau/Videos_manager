const changeURL = () => {
    
    const $form = document.querySelector('.filter-form');
    const $categorySelect = document.querySelector('.filter-form__category-select');
    const $timingSelect = document.querySelector('.filter-form__timing-select');

    if ($categorySelect.value !== 'ch$oose') {
        $form.action += `&categorie=${$categorySelect.value}`;
    }

    if ($timingSelect.value !== 'choose') {
        $form.action += `&timing=${$timingSelect.value}`;
    }
}



const $selectValue = document.querySelector('.form-box__select-edit-type');
const $selectEditVideos = document.querySelectorAll('.form-box__select-edit-videos');

if($selectValue){
    if ($selectValue.value === 'film') {
        selectEditVideos.forEach(element => {
            element.classList.add('d-none');
        })
    }
    $selectValue.addEventListener('change', (e) => {
        $selectEditVideos.forEach(element => {
            if (e.target.value === 'film') {
                element.classList.add('d-none');
            } else {
                element.classList.remove('d-none');
            }
        });
    
    })
}

const $selectCreateType = document.querySelector('.form-box__select-manage_type');
const $selectCreateVideos = document.querySelectorAll('.form-box__select-manage-videos');

$selectCreateType.addEventListener('change', (e) => {
    $selectCreateVideos.forEach(element => {
      if(e.target.value === 'film'){
        element.classList.add('d-none');
      } else {
        element.classList.remove('d-none');
      }
    });
  
})

