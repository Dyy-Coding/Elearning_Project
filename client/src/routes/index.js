
import { ref, computed } from 'vue'
import Dashboard from '@/components/page/Dashboard.vue'


const routes = {
  '/': Dashboard,
  '/about': About
}

const currentPath = ref(window.location.hash)

window.addEventListener('hashchange', () => {
  currentPath.value = window.location.hash
})

const currentView = computed(() => {
  return routes[currentPath.value.slice(1) || '/'] || NotFound
})
