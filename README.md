# How to Instantly Upgrade Legacy Symfony Project in Minutes

Slides can be found here: https://slides.com/tomasvotruba/minute-symfonycon-2022

What do we Demo?

## 1. Patches

```bash
# see vendor/symfony/form/Test/TypeTestCase.php:28

composer demo-generate-patch
```

## 2. YAML to PHP config migration

```bash
composer demo-transform-config

# apply changes
composer demo-transform-config-no-dry
```

## 3. Type Coverage

```bash
composer demo-type-coverage
```

## 5. Rector Upgrade Set

```bash
composer demo-rename-class
```

## 6. Rector Doctrine Attributes

```bash
composer demo-doctrine-attributes
```

## 7. Rector auto-commit

@todo - create a PR and push something wrong :)

Put your hands back, set comfortably and enjoy Rector working for you B-)
