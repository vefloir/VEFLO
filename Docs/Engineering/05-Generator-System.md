# VEFLO Generator System

Version: Genesis 1.0

---

# Mission

تمام Generator های VEFLO باید از یک معماری واحد پیروی کنند.

---

# Layers

Artisan Command

↓

Generator Factory

↓

Generator Registry

↓

Generator

↓

Abstract Generator

↓

Stub Engine

↓

Filesystem

---

# Responsibilities

## Artisan Command

- دریافت ورودی کاربر
- ارسال درخواست

---

## Generator Factory

- انتخاب Generator مناسب

---

## Generator Registry

- ثبت Generator ها
- نگهداری Mapping

---

## Generator

- منطق اختصاصی هر Generator

---

## Abstract Generator

- Copy Stub
- Replace Variables
- Create Directory
- Write Files

---

## Stub Engine

Template Files

---

## Filesystem

ساخت فایل و پوشه

---

# Future Generators

Module

Component

Widget

Page

AI

Plugin

Theme

Migration

Installer

Doctor

---

# Principle

Every Generator

↓

extends AbstractGenerator

↓

implements GeneratorInterface

Never duplicate code.