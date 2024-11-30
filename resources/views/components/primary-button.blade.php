<button {{$attributes->merge(
   
    [ "class" => "inline-flex max-w-md items-center justify-center px-4 py-2 text-lg font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-blue-500 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none"]
    
)}}> {{$slot}} </button>
