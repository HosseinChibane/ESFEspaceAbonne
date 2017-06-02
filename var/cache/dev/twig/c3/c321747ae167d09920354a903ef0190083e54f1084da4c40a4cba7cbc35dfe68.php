<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_65c5dabc00d5e06e8a7397fda8563703ac2b9135350b9a3948b1d2562b7fb766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_062ec0391cab16cb24d3a79cae42a2c0fcc5e770be740c7a1682e5c9c3993c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062ec0391cab16cb24d3a79cae42a2c0fcc5e770be740c7a1682e5c9c3993c97->enter($__internal_062ec0391cab16cb24d3a79cae42a2c0fcc5e770be740c7a1682e5c9c3993c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        $__internal_a4462dadd7900d29a215fc3b4fef20850453896e66f7ce9ad5c64016589553cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4462dadd7900d29a215fc3b4fef20850453896e66f7ce9ad5c64016589553cb->enter($__internal_a4462dadd7900d29a215fc3b4fef20850453896e66f7ce9ad5c64016589553cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
        
        $__internal_062ec0391cab16cb24d3a79cae42a2c0fcc5e770be740c7a1682e5c9c3993c97->leave($__internal_062ec0391cab16cb24d3a79cae42a2c0fcc5e770be740c7a1682e5c9c3993c97_prof);

        
        $__internal_a4462dadd7900d29a215fc3b4fef20850453896e66f7ce9ad5c64016589553cb->leave($__internal_a4462dadd7900d29a215fc3b4fef20850453896e66f7ce9ad5c64016589553cb_prof);

    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        $__internal_f35f4d7215fcf17b395f094e9789cee0f8e46f6d1e8aa57095b8931066854c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35f4d7215fcf17b395f094e9789cee0f8e46f6d1e8aa57095b8931066854c7d->enter($__internal_f35f4d7215fcf17b395f094e9789cee0f8e46f6d1e8aa57095b8931066854c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        $__internal_dc91e015aef79a6263192baf0101e9a45ca21018dcccc98f71a02e7533eb5bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc91e015aef79a6263192baf0101e9a45ca21018dcccc98f71a02e7533eb5bee->enter($__internal_dc91e015aef79a6263192baf0101e9a45ca21018dcccc98f71a02e7533eb5bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if (($context["image_path"] ?? $this->getContext($context, "image_path"))) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if (($context["link_url"] ?? $this->getContext($context, "link_url"))) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ((($context["link_filter"] ?? $this->getContext($context, "link_filter"))) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(($context["link_url"] ?? $this->getContext($context, "link_url")), ($context["link_filter"] ?? $this->getContext($context, "link_filter")))) : (($context["link_url"] ?? $this->getContext($context, "link_url")))), "html", null, true);
                echo "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["link_attr"] ?? $this->getContext($context, "link_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(($context["image_path"] ?? $this->getContext($context, "image_path")), ($context["image_filter"] ?? $this->getContext($context, "image_filter"))), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["image_attr"] ?? $this->getContext($context, "image_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if (($context["link_url"] ?? $this->getContext($context, "link_url"))) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dc91e015aef79a6263192baf0101e9a45ca21018dcccc98f71a02e7533eb5bee->leave($__internal_dc91e015aef79a6263192baf0101e9a45ca21018dcccc98f71a02e7533eb5bee_prof);

        
        $__internal_f35f4d7215fcf17b395f094e9789cee0f8e46f6d1e8aa57095b8931066854c7d->leave($__internal_f35f4d7215fcf17b395f094e9789cee0f8e46f6d1e8aa57095b8931066854c7d_prof);

    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 17,  103 => 16,  99 => 14,  95 => 12,  93 => 11,  76 => 9,  73 => 8,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block liip_imagine_image_widget %}
    {% spaceless %}
        {% if image_path %}
            <div>
                {% if link_url %}
                    <a href=\"{{ link_filter ? link_url|imagine_filter(link_filter): link_url }}\" {% for attrname, attrvalue in link_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}>
                {% endif %}

                <img src=\"{{ image_path|imagine_filter(image_filter) }}\" {% for attrname, attrvalue in image_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %} />

                {% if link_url %}
                    </a>
                {% endif %}
            </div>
        {% endif %}

        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock %}
", "LiipImagineBundle:Form:form_div_layout.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\liip\\imagine-bundle\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
