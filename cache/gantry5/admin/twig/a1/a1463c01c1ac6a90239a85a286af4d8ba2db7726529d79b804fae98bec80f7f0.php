<?php

/* forms/fields.html.twig */
class __TwigTemplate_7a23068eeb7d1edd26287600351bb2a97bcdefccc18158b626d954c8d202fe1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["scope"] = (($context["scope"]) ?? (($context["prefix"] ?? null)));
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["blueprints"] ?? null), "type", array())) {
            // line 4
            echo "    ";
            $context["field"] = ($context["blueprints"] ?? null);
            // line 5
            echo "    ";
            $context["current_value"] = ($context["data"] ?? null);
            // line 6
            echo "    ";
            $context["default_value"] = ($context["defaults"] ?? null);
            // line 7
            echo "
    ";
            // line 8
            $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute(($context["field"] ?? null), "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields.html.twig", 8)->display($context);
            // line 9
            echo "
";
        } else {
            // line 11
            echo "
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blueprints"] ?? null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["field"]) {
                // line 13
                echo "        ";
                if ((is_string($__internal_09f3f34ae50aa928b8686feef67fd1bed4acbfbdb6e8de574ea716955e9a81d5 = $context["name"]) && is_string($__internal_d6cf62a873733b3adffdf4c04a7bcb6cff16a0f3c95c29d6a368b4035ac9d033 = ".") && ('' === $__internal_d6cf62a873733b3adffdf4c04a7bcb6cff16a0f3c95c29d6a368b4035ac9d033 || 0 === strpos($__internal_09f3f34ae50aa928b8686feef67fd1bed4acbfbdb6e8de574ea716955e9a81d5, $__internal_d6cf62a873733b3adffdf4c04a7bcb6cff16a0f3c95c29d6a368b4035ac9d033)))) {
                    // line 14
                    echo "            ";
                    $context["name"] = twig_slice($this->env, $context["name"], 1, null);
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "
        ";
                // line 17
                $context["container"] = ($this->getAttribute($context["field"], "type", array()) == "container.tabs");
                // line 18
                echo "        ";
                $context["current_value"] = ((($context["container"] ?? null)) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["data"] ?? null), twig_trim_filter(($context["scope"] ?? null), "."))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["data"] ?? null), (($context["scope"] ?? null) . $context["name"]))));
                // line 19
                echo "        ";
                $context["default_value"] = ((($context["container"] ?? null)) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["defaults"] ?? null), twig_trim_filter(($context["scope"] ?? null), "."))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["defaults"] ?? null), (($context["scope"] ?? null) . $context["name"]))));
                // line 20
                echo "        ";
                $context["has_value"] =  !(null === ($context["current_value"] ?? null));
                // line 21
                echo "        ";
                $context["field_overrideable"] = (($this->getAttribute($context["field"], "overridable", array(), "any", true, true)) ? ($this->getAttribute($context["field"], "overridable", array())) : ((($this->getAttribute($context["field"], "overrideable", array(), "any", true, true)) ? ($this->getAttribute($context["field"], "overrideable", array())) : (true))));
                // line 22
                echo "
        ";
                // line 23
                if ((((($this->getAttribute($context["field"], "type", array()) && !twig_in_filter($context["name"], ($context["skip"] ?? null))) &&  !$this->getAttribute($context["field"], "skip", array())) &&  !((($context["ignore_not_overrideable"] ?? null) &&  !($context["field_overrideable"] ?? null)) &&  !($context["has_value"] ?? null))) &&  !( !($context["has_value"] ?? null) && ($context["not_global_overrideable"] ?? null)))) {
                    // line 24
                    echo "            ";
                    $context["field"] = ($context["field"] + array("name" => $context["name"]));
                    // line 25
                    echo "
            ";
                    // line 26
                    $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["field"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields.html.twig", 26)->display($context);
                    // line 27
                    echo "        ";
                }
                // line 28
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "forms/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  103 => 27,  101 => 26,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  64 => 13,  47 => 12,  44 => 11,  40 => 9,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields.html.twig", "C:\\xampp\\htdocs\\zoomin\\administrator\\components\\com_gantry5\\templates\\forms\\fields.html.twig");
    }
}
