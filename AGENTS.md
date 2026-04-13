# AGENTS.md - import-serializer

## Zweck & Verantwortung

Das `import-serializer` Modul definiert die **Schnittstellen und Verträge** für Serialisierung von Import-Daten. Es ist ein **Tier 0 Modul** ohne externe TechDivision-Abhängigkeiten und dient als Basis für konkrete Serializer-Implementierungen (z.B. CSV).

**Hauptverantwortung:**
- Definition von Serializer-Interfaces
- Standardisierung von Serialisierungs-Verträgen
- Ermöglichung austauschbarer Serializer-Implementierungen

## Architektur & Design Patterns

### Interfaces (Utility Classes)
- **SerializerFactoryInterface**: Factory für Serializer-Erstellung
- **AdditionalAttributeSerializerInterface**: Spezialisierter Serializer für Attribute
- **ConfigurationAwareSerializerInterface**: Serializer mit Konfiguration

### Verwendete Patterns
- **Interface-Heavy Design**: Nur Verträge, keine Implementierung
- **Factory Pattern**: Für Serializer-Erstellung
- **Strategy Pattern**: Verschiedene Serialisierungs-Strategien

## Abhängigkeiten

### Externe Pakete
- **Keine** - Tier 0 Modul mit reinen Interfaces

### TechDivision Dependencies
- **Keine** - Basis-Modul ohne interne Dependencies

### Abhängig von diesem Modul (3 Reverse Dependencies)
1. **import** - Core Framework nutzt Serializer-Interfaces
2. **import-serializer-csv** - Implementiert CSV-Serializer
3. **import-cli-simple** - Transitiv über andere Module

## Wichtige Entry Points

### Interfaces
```php
// Serializer Factory
SerializerFactoryInterface::create($type): SerializerInterface

// Serializer
SerializerInterface::serialize($data): string
SerializerInterface::deserialize($data): array

// Additional Attribute Serializer
AdditionalAttributeSerializerInterface::serialize($attributes): string
```

## Events & Extension Points

**Keine Events** - Tier 0 Modul mit reinen Interfaces

## Hints für KI-Agenten

### Wichtig zu verstehen
1. **Tier 0 Modul**: Definiert nur Verträge, keine Implementierung
2. **Austauschbarkeit**: Jede Serializer-Implementierung kann `SerializerInterface` implementieren
3. **Keine Logik**: Nur Interface-Definitionen
4. **Spezialisierte Interfaces**: Für Attribute und Konfiguration

### Bei Änderungen
- **Interface-Änderungen sind Breaking Changes**
- **Neue Methoden**: Müssen in allen Implementierungen hinzugefügt werden
- **Vorsicht**: Basis für CSV-Serializer und andere Implementierungen

## Bekannte Einschränkungen

- **Nur Interfaces**: Keine konkrete Implementierung
- **Keine CSV-Logik**: CSV-Implementierung ist in `import-serializer-csv`
- **Keine Validierung**: Validierung erfolgt in Implementierungen

## Zusammenfassung

`import-serializer` ist ein **minimales Tier 0 Modul**, das Schnittstellen für Daten-Serialisierung definiert. Es ermöglicht verschiedene Serialisierungs-Formate (CSV, JSON, etc.) ohne Abhängigkeit vom Kern-Framework.

**Für Agenten:** Verstehe dieses Modul als **Serialisierungs-Verträge**, nicht als Implementierung.
