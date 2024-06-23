import 'flowbite';
import {Alpine, Livewire} from '../../vendor/livewire/livewire/dist/livewire.esm';
import mask from '@alpinejs/mask';

import './bootstrap';

Alpine.plugin(mask)

Livewire.start()
