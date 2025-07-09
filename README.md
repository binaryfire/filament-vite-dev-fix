# Filament Vite Dev Fix

A temporary fix for Filament v4's Vite dev server styling issues.

## The Problem

When running Filament v4 with Vite's dev server (`npm run dev`), some button styles don't render properly. This is due to CSS selectors using `+ &` not being processed correctly by Vite (despite the fact that it handles them fine for builds).

Original issue: [filamentphp/filament#16257](https://github.com/filamentphp/filament/issues/16257)

## Installation

```bash
composer require binaryfire/filament-vite-dev-fix --dev
```

The package loads a stylesheet with CSS overrides to fix the issues. The stylesheet is only loaded in non-production environments.

## Requirements

- Filament v4

## Contributing

If you find any additional styling issues when running Vite's dev server, please feel free to submit a PR with the fixes.
