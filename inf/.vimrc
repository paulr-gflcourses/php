" Specify a directory for plugins
" - For Neovim: ~/.local/share/nvim/plugged
" - Avoid using standard Vim directory names like 'plugin'
call plug#begin('~/.vim/plugged')

"Plug 'Valloric/YouCompleteMe'
Plug 'jiangmiao/auto-pairs'
Plug 'tpope/vim-surround'           " Изменение окружающих символов, тегов

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

" GIT
Plug 'tpope/vim-fugitive'
Plug 'airblade/vim-gitgutter'

" On-demand loading
Plug 'scrooloose/nerdtree', { 'on':  'NERDTreeToggle' }

"Plug 'bling/vim-airline'
"Plug 'vim-airline/vim-airline'     " Статустная панель 
"Plug 'vim-airline/vim-airline-themes'
" Colorschemes
Plug 'morhetz/gruvbox'
Plug 'altercation/vim-colors-solarized'



call plug#end()

set encoding=utf-8                                  " set charset translation encoding
set termencoding=utf-8                              " set terminal encoding
set fileencoding=utf-8                              " set save encoding
set fileencodings=utf8,koi8r,cp1251,cp866,ucs-2le   " список предполагаемых кодировок, в порядке предпочтения

if has("gui_running")
  if has("gui_gtk2")
    set guifont=Inconsolata\ 12
  elseif has("gui_win32")
    set guifont=Consolas:h11
    set termguicolors
    set langmenu=ru_RU.UTF-8
  endif
elseif !has("termguicolors")
  " set Vim-specific sequences for RGB colors
  let &t_8f = "\<Esc>[38;2;%lu;%lu;%lum"
  let &t_8b = "\<Esc>[48;2;%lu;%lu;%lum"
endif

endif

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
set foldmethod=indent
"--- syntastic settings
set statusline+=%#warningmsg#
set statusline+=%{SyntasticStatuslineFlag()}
set statusline+=%*

let g:syntastic_always_populate_loc_list = 1
let g:syntastic_auto_loc_list = 1
let g:syntastic_check_on_open = 1
let g:syntastic_check_on_wq = 0
let g:syntastic_enable_signs=1
let g:syntastic_php_checkers = ['php', 'phpcs', 'phpmd']
"---

"let g:airline_theme='simple'
"set termguicolors
"set t_Co=256

syntax on
syntax enable

set background=dark
colorscheme gruvbox
"colorscheme solarized


