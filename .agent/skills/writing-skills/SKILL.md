---
name: writing-skills
description: Use when creating new skills for Claude/AI agents - guides skill structure, testing, and optimization for discoverability
---

# Writing Skills

## Overview

Create skills that are discoverable, testable, and effective. Skills are instructions that help the agent handle specific tasks or workflows consistently.

## What is a Skill?

A skill is a markdown file with:
1. **YAML Frontmatter** - Metadata for discovery (name, description)
2. **Markdown Body** - Instructions, rules, checklists

## When to Create a Skill

Create a skill when:
- Task is repeated across sessions
- Workflow needs consistency
- Process has specific steps that shouldn't be skipped
- You find yourself giving same instructions repeatedly

## Skill Types

### Technique
**How to do something specific:**
- TDD (Red-Green-Refactor)
- Systematic debugging
- Code review

### Pattern
**Mental models and approaches:**
- Brainstorming
- Dispatching parallel agents
- Architecture decisions

### Reference
**Documentation and lookups:**
- API usage
- Project conventions
- Tool commands

## Directory Structure

```
.agent/skills/
└── skill-name/
    └── SKILL.md          # Required: main instructions
    ├── examples/         # Optional: example files
    └── templates/        # Optional: prompt templates
```

## SKILL.md Structure

```markdown
---
name: skill-name
description: When to use this skill - be specific about triggers and context
---

# Skill Title

## Overview
Brief summary of what this skill does and why.

**Core principle:** One sentence guiding philosophy.

## When to Use
- Specific trigger condition 1
- Specific trigger condition 2

## The Process
Step-by-step instructions...

## Red Flags
Signs you're doing it wrong...

## Common Mistakes
| Mistake | Fix |
|---------|-----|
| ... | ... |

## Integration
Other skills this pairs with...
```

## Claude Search Optimization (CSO)

### 1. Rich Description Field
The description is most important for discovery. Include:
- Primary use case
- Trigger conditions
- What it helps with

```yaml
# ✅ Good
description: Use when encountering any bug, test failure, or unexpected behavior, before proposing fixes

# ❌ Bad
description: Debugging skill
```

### 2. Keyword Coverage
Include relevant keywords that users might search for:
- Action words (fix, create, build, debug)
- Domain terms (test, API, component)
- Problem phrases (failing, broken, error)

### 3. Descriptive Naming
Skill names should be:
- Lowercase with hyphens
- Action-oriented
- Self-explanatory

```
✅ systematic-debugging
✅ test-driven-development
✅ writing-plans

❌ debug
❌ tdd
❌ plans
```

### 4. Token Efficiency
Keep skills focused and concise:
- One skill per concept
- No unnecessary repetition
- Clear, direct language

### 5. Cross-Referencing
Reference related skills to aid discovery:
```markdown
## Integration
**Pairs with:**
- superpowers:test-driven-development
- superpowers:verification-before-completion
```

## Testing Skills

**Discipline-Enforcing Skills:**
Test by trying to rationalize around the rules. If you can find loopholes, close them.

**Technique Skills:**
Test by following the steps exactly. Do they lead to the right outcome?

**Pattern Skills:**
Test by applying to real scenarios. Does the mental model apply?

## The Iron Law

```
BEFORE shipping a skill, verify it works:

1. Read the skill as if you've never seen it
2. Follow it exactly on a real task
3. Note where you got confused or wanted to skip
4. Fix those gaps
5. Repeat until bulletproof
```

## Common Rationalizations for Skipping Testing

| Excuse | Reality |
|--------|---------|
| "It's just documentation" | Documentation that doesn't work is worse than none |
| "I'll test it when I use it" | You'll rationalize around bugs |
| "It's based on working skill" | Copy errors happen |
| "Just minor changes" | Minor changes break things |

## Skill Creation Checklist

- [ ] Name is descriptive and searchable
- [ ] Description covers trigger conditions
- [ ] Overview states purpose clearly
- [ ] Steps are specific and actionable
- [ ] Red flags list common mistakes
- [ ] Integration references related skills
- [ ] Tested by following exactly on real task

## The Bottom Line

**A skill that isn't discovered isn't used.**
**A skill that isn't tested might be wrong.**

Optimize for discovery. Verify by testing.
