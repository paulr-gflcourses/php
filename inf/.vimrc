" Specify a directory for plugins
" - For Neovim: ~/.local/share/nvim/plugged
" - Avoid using standard Vim directory names like 'plugin'
call plug#begin('~/.vim/plugged')

"Plug 'Valloric/YouCompleteMe'
Plug 'jiangmiao/auto-pairs'
Plug 'tpope/vim-surround'           " Изменение окружающих символов, тегов

Plug 'tpope/vim-repeat'

Plug 'kien/ctrlp.vim'
Plug 'rking/ag.vim'                 " Поиск по файлам

Plug 'easymotion/vim-easymotion'

Plug 'scrooloose/syntastic'         " Синтаксич ошибки  
Plug 'majutsushi/tagbar'            " Панель классов и методов 

Plug 'scrooloose/nerdcommenter'    "Комментарии 
Plug 'jlanzarotta/bufexplorer'      "Переключение между буферами


Plug 'MarcWeber/vim-addon-mw-utils'
Plug 'tomtom/tlib_vim'
Plug 'garbas/vim-snipmate'

" Optional:
Plug 'honza/vim-snippets'


Plug 'mattn/emmet-vim'
" GIT
Plug 'tpope/vim-fugitive'
Plug 'airblade/vim-gitgutter'

" On-demand loading
Plug 'scrooloose/nerdtree', { 'on':  'NERDTreeToggle' }

Plug 'bling/vim-airline'
Plug 'vim-airline/vim-airline'     " Статустная панель 
Plug 'vim-airline/vim-airline-themes'
" Colorschemes
Plug 'morhetz/gruvbox'
Plug 'altercation/vim-colors-solarized'



call plug#end()

if has("gui_running")
    set ff=dos
    " Удаление символов бэкспэйсом в Windows
    set backspace=indent,eol,start
    if has("gui_gtk2")
        set guifont=Inconsolata\ 12
    elseif has("gui_win32")
        set guifont=Consolas:h11
        set termguicolors
        set langmenu=ru_RU.UTF-8
    endif
else
    set ff=unix
    if !has("termguicolors")
        " set Vim-specific sequences for RGB colors
        "let &t_8f = "\<Esc>[38;2;%lu;%lu;%lum"
        "let &t_8b = "\<Esc>[48;2;%lu;%lu;%lum"
    else
        set termguicolors
    endif
endif


set encoding=utf-8                                  " set charset translation encoding
set termencoding=utf-8                              " set terminal encoding
set fileencoding=utf-8                              " set save encoding
set fileencodings=utf8,koi8r,cp1251,cp866,ucs-2le   " список предполагаемых кодировок, в порядке предпочтения

let g:NERDTreeDirArrowExpandable = '▸'
let g:NERDTreeDirArrowCollapsible = '▾'


let g:mapleader=','
let g:gruvbox_contrast_light = 'hard'
"let g:gruvbox_contrast_dark = 'hard'
let g:gruvbox_italic=1

let g:solarized_termcolors=256
"mappings

map <C-n> :NERDTreeToggle<CR>
map <Leader> <Plug>(easymotion-prefix)

"---bufexplorer
nmap <C-F5> <Esc>:BufExplorer<cr>
vmap <C-F5> <esc>:BufExplorer<cr>
imap <C-F5> <esc>:BufExplorer<cr>
" F6 - предыдущий буфер
nmap <C-F6> :bp<cr>
vmap <C-F6> <esc>:bp<cr>i
imap <C-F6> <esc>:bp<cr>i
" F7 - следующий буфер
nmap <C-F7> :bn<cr>
vmap <C-F7> <esc>:bn<cr>i
imap <C-F7> <esc>:bn<cr>i
"---

nmap <F8> :TagbarToggle<CR>

set number
set expandtab
set tabstop=4
set shiftwidth=4
set smarttab
set smartindent
set tw=80
set ai

set hlsearch
set incsearch


set foldenable
set foldlevel=100
set foldmethod=indent


set nocompatible
" Показывать положение курсора всё время.
set ruler
" " Показывать незавершённые команды в статусбаре
set showcmd

" Поддержка мыши
set mouse=a
set mousemodel=popup
" Скрывать указатель мыши, когда печатаем
set mousehide

" Не выгружать буфер, когда переключаемся на другой
" Это позволяет редактировать несколько файлов в один и тот же момент без
" необходимости сохранения каждый раз
" когда переключаешься между ними
set hidden
" Скрыть панель в gui версии
set guioptions-=T
" Сделать строку команд высотой в одну строку
set ch=1

" Не переносить строки
set nowrap


" Подсвечивать линию текста, на которой находится курсор
set cursorline
highlight CursorLine guibg=lightblue ctermbg=lightgray
highlight CursorLine term=none cterm=none
" Увеличение размера истории
set history=200
" Дополнительная информация в строке состояния
set wildmenu
" Настройка отображения специальных символов
"set list listchars=tab:→\ ,trail:·
" Включение сторонних плагинов
filetype plugin on

if filereadable(".vim_config")
    source .vim_config
endif

"--- syntastic settings
set statusline+=%#warningmsg#
set statusline+=%{SyntasticStatuslineFlag()}
set statusline+=%*

"function! SuperCleverTab()
    "if strpart( getline('.'), 0, col('.')-1  ) =~ '^\s*$'
        "return "\<Tab>"
    "else
        "return "\<C-p>"
    "endif
"endfunction

"inoremap <Tab> <C-R>=SuperCleverTab()<cr>


let g:syntastic_always_populate_loc_list = 1
let g:syntastic_auto_loc_list = 1
let g:syntastic_check_on_open = 1
let g:syntastic_check_on_wq = 0
let g:syntastic_enable_signs=1
let g:syntastic_php_checkers = ['php', 'phpcs', 'phpmd']
"---

let g:airline_theme='simple'
"set termguicolors
"set t_Co=256

syntax on
syntax enable

set background=dark
colorscheme gruvbox
set background=light
colorscheme solarized


