<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Okanet Solutions — Soluciones Tecnologicas Inteligentes</title>
    <meta name="description" content="Okanet Solutions C.A. — Empresa venezolana de software con soluciones CRM para influencers y ERP con IA para proveedores de internet.">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0a0a0f] text-white antialiased font-[Inter]">

    {{-- Navigation --}}
    <nav class="fixed top-0 w-full z-50 bg-[#0a0a0f]/80 backdrop-blur-xl border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="#" class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-violet-500 to-cyan-400 flex items-center justify-center font-bold text-sm">O</div>
                <span class="text-xl font-bold tracking-tight">Okanet<span class="text-violet-400">.</span></span>
            </a>
            <div class="hidden md:flex items-center gap-8 text-sm text-gray-400">
                <a href="#soluciones" class="hover:text-white transition-colors">Soluciones</a>
                <a href="#okacrm" class="hover:text-white transition-colors">OkaCRM</a>
                <a href="#okaisp" class="hover:text-white transition-colors">OkaISP</a>
                <a href="#nosotros" class="hover:text-white transition-colors">Nosotros</a>
                <a href="#contacto" class="px-5 py-2 rounded-full bg-violet-600 hover:bg-violet-500 text-white font-medium transition-colors">Contacto</a>
            </div>
            {{-- Mobile menu button --}}
            <button id="menu-toggle" class="md:hidden text-gray-400 hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-3 text-sm text-gray-400">
            <a href="#soluciones" class="block hover:text-white transition-colors">Soluciones</a>
            <a href="#okacrm" class="block hover:text-white transition-colors">OkaCRM</a>
            <a href="#okaisp" class="block hover:text-white transition-colors">OkaISP</a>
            <a href="#nosotros" class="block hover:text-white transition-colors">Nosotros</a>
            <a href="#contacto" class="block hover:text-white transition-colors">Contacto</a>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        {{-- Gradient orbs --}}
        <div class="absolute top-1/4 -left-32 w-96 h-96 bg-violet-600/20 rounded-full blur-[128px]"></div>
        <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-cyan-500/15 rounded-full blur-[128px]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-violet-500/5 rounded-full blur-[200px]"></div>

        <div class="relative max-w-5xl mx-auto px-6 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-gray-400 mb-8">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Soluciones tecnologicas desde Venezuela para el mundo
            </div>

            <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-extrabold tracking-tight leading-[1.05]">
                Software que<br>
                <span class="bg-gradient-to-r from-violet-400 via-cyan-400 to-violet-400 bg-clip-text text-transparent">impulsa negocios</span>
            </h1>

            <p class="mt-6 text-lg sm:text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed">
                Desarrollamos plataformas inteligentes que transforman la manera en que las empresas operan. CRM para creadores de contenido y ERP con IA para proveedores de internet.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#soluciones" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-violet-600 to-violet-500 hover:from-violet-500 hover:to-violet-400 text-white font-semibold text-base transition-all shadow-lg shadow-violet-500/25">
                    Explorar soluciones
                </a>
                <a href="#contacto" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white/5 border border-white/10 hover:bg-white/10 text-white font-semibold text-base transition-all">
                    Hablar con nosotros
                </a>
            </div>

            {{-- Stats --}}
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-3xl mx-auto">
                <div>
                    <div class="text-3xl font-bold text-white">2019</div>
                    <div class="text-sm text-gray-500 mt-1">Fundada</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-white">2</div>
                    <div class="text-sm text-gray-500 mt-1">Productos</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-white">IA</div>
                    <div class="text-sm text-gray-500 mt-1">Integrada</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-white">24/7</div>
                    <div class="text-sm text-gray-500 mt-1">Soporte</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Solutions Overview --}}
    <section id="soluciones" class="py-32 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <p class="text-violet-400 font-semibold text-sm tracking-widest uppercase mb-4">Nuestras Soluciones</p>
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight">Un producto para cada mercado</h2>
                <p class="mt-4 text-gray-400 max-w-xl mx-auto">Dos plataformas especializadas, disenadas para resolver problemas reales en industrias especificas.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                {{-- OkaCRM Card --}}
                <a href="#okacrm" class="group relative rounded-2xl bg-gradient-to-b from-white/[0.07] to-white/[0.02] border border-white/10 p-10 hover:border-violet-500/30 transition-all duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-violet-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-14 h-14 rounded-2xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128H5.228A2 2 0 013 17.208V5.792A2 2 0 015.228 3.872h13.544A2 2 0 0121 5.792v3.528M12 8.25a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/></svg>
                        </div>
                        <div class="text-xs font-semibold tracking-widest uppercase text-violet-400 mb-2">okacrm.net</div>
                        <h3 class="text-2xl font-bold mb-3">OkaCRM</h3>
                        <p class="text-gray-400 leading-relaxed mb-6">CRM disenado para influencers y creadores de contenido que quieren posicionar su marca personal en el mercado. Gestiona contactos, campanas, colaboraciones y metricas de impacto desde una sola plataforma.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-300 text-xs font-medium">Gestion de Marca</span>
                            <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-300 text-xs font-medium">Campanas</span>
                            <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-300 text-xs font-medium">Metricas</span>
                            <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-300 text-xs font-medium">Colaboraciones</span>
                        </div>
                    </div>
                </a>

                {{-- OkaISP Card --}}
                <a href="#okaisp" class="group relative rounded-2xl bg-gradient-to-b from-white/[0.07] to-white/[0.02] border border-white/10 p-10 hover:border-cyan-500/30 transition-all duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative">
                        <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z"/></svg>
                        </div>
                        <div class="text-xs font-semibold tracking-widest uppercase text-cyan-400 mb-2">okaisp</div>
                        <h3 class="text-2xl font-bold mb-3">OkaISP</h3>
                        <p class="text-gray-400 leading-relaxed mb-6">ERP con inteligencia artificial para proveedores de internet. Optimiza operaciones, reduce costos y automatiza procesos con IA, incluyendo modulo de contabilidad basica integrada.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-300 text-xs font-medium">IA Integrada</span>
                            <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-300 text-xs font-medium">Contabilidad</span>
                            <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-300 text-xs font-medium">Automatizacion</span>
                            <span class="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-300 text-xs font-medium">Optimizacion</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- OkaCRM Detail Section --}}
    <section id="okacrm" class="py-32 relative">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        <div class="absolute top-1/2 -left-64 w-[500px] h-[500px] bg-violet-600/10 rounded-full blur-[200px]"></div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-violet-500/10 border border-violet-500/20 text-sm text-violet-400 font-medium mb-6">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        okacrm.net
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6">
                        El CRM que los<br><span class="text-violet-400">influencers</span> necesitan
                    </h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-10">
                        OkaCRM es la herramienta disenada para creadores de contenido e influencers que buscan profesionalizar su marca. Centraliza tus contactos, gestiona colaboraciones con marcas y mide el impacto real de tu presencia digital.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-violet-500/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Posicionamiento de Marca</h4>
                                <p class="text-gray-500 text-sm">Herramientas estrategicas para construir y fortalecer tu marca personal en redes sociales.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-violet-500/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Gestion de Colaboraciones</h4>
                                <p class="text-gray-500 text-sm">Administra propuestas, contratos y campanas con marcas desde un solo lugar.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-violet-500/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Analitica de Impacto</h4>
                                <p class="text-gray-500 text-sm">Dashboards con metricas reales de engagement, alcance y crecimiento de audiencia.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Visual mockup --}}
                <div class="relative">
                    <div class="rounded-2xl bg-gradient-to-b from-white/[0.08] to-white/[0.02] border border-white/10 p-8 backdrop-blur">
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-3 h-3 rounded-full bg-red-500/60"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500/60"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/60"></div>
                            <span class="ml-3 text-xs text-gray-500">okacrm.net/dashboard</span>
                        </div>
                        <div class="space-y-4">
                            <div class="h-8 w-48 rounded-lg bg-violet-500/10"></div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="rounded-xl bg-white/5 p-4 text-center">
                                    <div class="text-2xl font-bold text-violet-400">12.4K</div>
                                    <div class="text-xs text-gray-500 mt-1">Seguidores</div>
                                </div>
                                <div class="rounded-xl bg-white/5 p-4 text-center">
                                    <div class="text-2xl font-bold text-emerald-400">8.2%</div>
                                    <div class="text-xs text-gray-500 mt-1">Engagement</div>
                                </div>
                                <div class="rounded-xl bg-white/5 p-4 text-center">
                                    <div class="text-2xl font-bold text-cyan-400">24</div>
                                    <div class="text-xs text-gray-500 mt-1">Campanas</div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="h-3 rounded-full bg-white/5 w-full"></div>
                                <div class="h-3 rounded-full bg-white/5 w-4/5"></div>
                                <div class="h-3 rounded-full bg-white/5 w-3/5"></div>
                            </div>
                            <div class="flex gap-3">
                                <div class="flex-1 h-24 rounded-xl bg-gradient-to-t from-violet-500/20 to-transparent"></div>
                                <div class="flex-1 h-24 rounded-xl bg-gradient-to-t from-violet-500/30 to-transparent"></div>
                                <div class="flex-1 h-24 rounded-xl bg-gradient-to-t from-violet-500/15 to-transparent"></div>
                                <div class="flex-1 h-24 rounded-xl bg-gradient-to-t from-violet-500/40 to-transparent"></div>
                                <div class="flex-1 h-24 rounded-xl bg-gradient-to-t from-violet-500/25 to-transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- OkaISP Detail Section --}}
    <section id="okaisp" class="py-32 relative">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        <div class="absolute bottom-1/2 -right-64 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[200px]"></div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                {{-- Visual mockup --}}
                <div class="relative order-2 lg:order-1">
                    <div class="rounded-2xl bg-gradient-to-b from-white/[0.08] to-white/[0.02] border border-white/10 p-8 backdrop-blur">
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-3 h-3 rounded-full bg-red-500/60"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500/60"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/60"></div>
                            <span class="ml-3 text-xs text-gray-500">okaisp/operaciones</span>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="h-8 w-40 rounded-lg bg-cyan-500/10"></div>
                                <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-emerald-500/10 text-emerald-400 text-xs font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                    IA Activa
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="rounded-xl bg-white/5 p-4">
                                    <div class="text-xs text-gray-500 mb-1">Costos Operativos</div>
                                    <div class="text-xl font-bold text-cyan-400">-32%</div>
                                    <div class="mt-2 h-1.5 rounded-full bg-white/5"><div class="h-full w-2/3 rounded-full bg-gradient-to-r from-cyan-500 to-cyan-400"></div></div>
                                </div>
                                <div class="rounded-xl bg-white/5 p-4">
                                    <div class="text-xs text-gray-500 mb-1">Automatizacion</div>
                                    <div class="text-xl font-bold text-violet-400">87%</div>
                                    <div class="mt-2 h-1.5 rounded-full bg-white/5"><div class="h-full w-[87%] rounded-full bg-gradient-to-r from-violet-500 to-violet-400"></div></div>
                                </div>
                            </div>
                            <div class="rounded-xl bg-white/5 p-4">
                                <div class="text-xs text-gray-500 mb-2">Prediccion IA — Proximos 30 dias</div>
                                <div class="flex items-end gap-1 h-16">
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 65%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 82%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 45%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 91%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 58%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 73%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 88%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 42%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 67%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 95%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 54%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 78%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 36%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 85%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 62%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 71%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 49%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 93%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 57%"></div>
                                    <div class="flex-1 rounded-t bg-gradient-to-t from-cyan-500/40 to-cyan-400/20" style="height: 80%"></div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-2">
                                <div class="rounded-lg bg-white/5 p-2 text-center">
                                    <div class="text-xs text-gray-500">Clientes</div>
                                    <div class="text-sm font-bold">2,847</div>
                                </div>
                                <div class="rounded-lg bg-white/5 p-2 text-center">
                                    <div class="text-xs text-gray-500">Tickets</div>
                                    <div class="text-sm font-bold text-emerald-400">14</div>
                                </div>
                                <div class="rounded-lg bg-white/5 p-2 text-center">
                                    <div class="text-xs text-gray-500">Uptime</div>
                                    <div class="text-sm font-bold">99.9%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-sm text-cyan-400 font-medium mb-6">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        OkaISP
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6">
                        ERP inteligente para<br><span class="text-cyan-400">proveedores de internet</span>
                    </h2>
                    <p class="text-gray-400 text-lg leading-relaxed mb-10">
                        OkaISP integra inteligencia artificial en cada proceso operativo de tu ISP. Desde la gestion de clientes hasta la contabilidad, todo optimizado para reducir costos y maximizar eficiencia.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">IA para Operaciones</h4>
                                <p class="text-gray-500 text-sm">Prediccion de fallas, optimizacion de rutas de mantenimiento y asignacion inteligente de recursos.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Optimizacion de Costos</h4>
                                <p class="text-gray-500 text-sm">Analisis automatizado de gastos con sugerencias de ahorro basadas en patrones historicos.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Contabilidad Integrada</h4>
                                <p class="text-gray-500 text-sm">Modulo contable basico con facturacion, cuentas por cobrar y reportes fiscales adaptados a Venezuela.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="nosotros" class="py-32 relative">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <p class="text-violet-400 font-semibold text-sm tracking-widest uppercase mb-4">Sobre Nosotros</p>
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6">Tecnologia venezolana de clase mundial</h2>
                <p class="text-gray-400 text-lg leading-relaxed">
                    Okanet Solutions C.A. es una empresa de tecnologia con sede en Caracas, Venezuela. Desde 2019, desarrollamos soluciones de software que combinan innovacion, inteligencia artificial y un profundo conocimiento del mercado latinoamericano.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="rounded-2xl bg-gradient-to-b from-white/[0.05] to-transparent border border-white/5 p-8 text-center">
                    <div class="w-14 h-14 rounded-2xl bg-violet-500/10 flex items-center justify-center mx-auto mb-5">
                        <svg class="w-7 h-7 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Hecha en Venezuela</h3>
                    <p class="text-gray-500 text-sm">Con sede en Caracas, conocemos las necesidades y desafios del mercado latinoamericano de primera mano.</p>
                </div>
                <div class="rounded-2xl bg-gradient-to-b from-white/[0.05] to-transparent border border-white/5 p-8 text-center">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 flex items-center justify-center mx-auto mb-5">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">IA como Pilar</h3>
                    <p class="text-gray-500 text-sm">La inteligencia artificial no es un anadido, es parte fundamental de nuestra arquitectura y propuesta de valor.</p>
                </div>
                <div class="rounded-2xl bg-gradient-to-b from-white/[0.05] to-transparent border border-white/5 p-8 text-center">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 flex items-center justify-center mx-auto mb-5">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/></svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Soluciones Verticales</h3>
                    <p class="text-gray-500 text-sm">No hacemos software generico. Cada producto esta disenado para resolver problemas especificos de industrias concretas.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact / CTA Section --}}
    <section id="contacto" class="py-32 relative">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-violet-500/5 rounded-full blur-[200px]"></div>

        <div class="max-w-3xl mx-auto px-6 text-center relative">
            <p class="text-violet-400 font-semibold text-sm tracking-widest uppercase mb-4">Contacto</p>
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6">Hablemos de tu proyecto</h2>
            <p class="text-gray-400 text-lg leading-relaxed mb-10">
                Si eres un creador de contenido que busca profesionalizar su marca, o un proveedor de internet que quiere optimizar sus operaciones, estamos listos para ayudarte.
            </p>

            <div class="rounded-2xl bg-gradient-to-b from-white/[0.07] to-white/[0.02] border border-white/10 p-8 md:p-10">
                <form class="space-y-5 text-left">
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Nombre</label>
                            <input type="text" placeholder="Tu nombre" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/50 transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                            <input type="email" placeholder="tu@email.com" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/50 transition-colors">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Producto de interes</label>
                        <select class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-gray-400 focus:outline-none focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/50 transition-colors">
                            <option value="">Selecciona un producto</option>
                            <option value="okacrm">OkaCRM — CRM para Influencers</option>
                            <option value="okaisp">OkaISP — ERP para ISP</option>
                            <option value="ambos">Ambos productos</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Mensaje</label>
                        <textarea rows="4" placeholder="Cuentanos sobre tu proyecto..." class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-violet-500/50 focus:ring-1 focus:ring-violet-500/50 transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-violet-600 to-violet-500 hover:from-violet-500 hover:to-violet-400 text-white font-semibold transition-all shadow-lg shadow-violet-500/25">
                        Enviar mensaje
                    </button>
                </form>

                <div class="mt-8 pt-8 border-t border-white/10">
                    <p class="text-gray-400 text-sm mb-3">O contáctanos directamente</p>
                    <a href="https://wa.me/584241780659" target="_blank" class="inline-flex items-center gap-2 text-violet-400 hover:text-violet-300 font-medium transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        +58 424 178 0659
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="py-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-10">
                <div class="md:col-span-2">
                    <a href="#" class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-violet-500 to-cyan-400 flex items-center justify-center font-bold text-sm">O</div>
                        <span class="text-xl font-bold tracking-tight">Okanet<span class="text-violet-400">.</span></span>
                    </a>
                    <p class="text-gray-500 text-sm leading-relaxed max-w-sm">
                        Okanet Solutions C.A. — Soluciones tecnologicas inteligentes desde Caracas, Venezuela.
                    </p>
                    <p class="text-gray-600 text-xs mt-3">RIF: J-41299500-6</p>
                </div>
                <div>
                    <h4 class="font-semibold text-sm mb-4">Productos</h4>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li><a href="#okacrm" class="hover:text-white transition-colors">OkaCRM</a></li>
                        <li><a href="#okaisp" class="hover:text-white transition-colors">OkaISP</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-sm mb-4">Empresa</h4>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li><a href="#nosotros" class="hover:text-white transition-colors">Nosotros</a></li>
                        <li><a href="#contacto" class="hover:text-white transition-colors">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-gray-600 text-xs">&copy; {{ date('Y') }} Okanet Solutions C.A. Todos los derechos reservados.</p>
                <p class="text-gray-600 text-xs">Av. Romulo Gallegos, Torre C del Centro ALOA, Piso 2 — Caracas, Venezuela</p>
            </div>
        </div>
    </footer>

    {{-- Mobile menu script --}}
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
    </script>
</body>
</html>
