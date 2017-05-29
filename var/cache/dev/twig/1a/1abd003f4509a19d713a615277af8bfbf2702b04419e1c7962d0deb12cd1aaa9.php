<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_a564cf09c569b9ba13196bc03a93f1db6b38371b1607c49246a4412267b9b202 extends Twig_Template
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
        $__internal_1ef71abdc88b0e064cd70f9245d0e5526f55ce89cb226c1bfeb0ec61f4c107f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef71abdc88b0e064cd70f9245d0e5526f55ce89cb226c1bfeb0ec61f4c107f7->enter($__internal_1ef71abdc88b0e064cd70f9245d0e5526f55ce89cb226c1bfeb0ec61f4c107f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        $__internal_427a3a2086880220ca302e5c1d579415c4c1657d8c36b2bcc331b857ed4799d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427a3a2086880220ca302e5c1d579415c4c1657d8c36b2bcc331b857ed4799d3->enter($__internal_427a3a2086880220ca302e5c1d579415c4c1657d8c36b2bcc331b857ed4799d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
        
        $__internal_1ef71abdc88b0e064cd70f9245d0e5526f55ce89cb226c1bfeb0ec61f4c107f7->leave($__internal_1ef71abdc88b0e064cd70f9245d0e5526f55ce89cb226c1bfeb0ec61f4c107f7_prof);

        
        $__internal_427a3a2086880220ca302e5c1d579415c4c1657d8c36b2bcc331b857ed4799d3->leave($__internal_427a3a2086880220ca302e5c1d579415c4c1657d8c36b2bcc331b857ed4799d3_prof);

    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        $__internal_0c6c288d6a5cdf112626a5ab0b722827455028f774ec9bbaa07f5fc54a390297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6c288d6a5cdf112626a5ab0b722827455028f774ec9bbaa07f5fc54a390297->enter($__internal_0c6c288d6a5cdf112626a5ab0b722827455028f774ec9bbaa07f5fc54a390297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        $__internal_f789082fea8d42c09f1cfc5119f827408daba22c3228980c8f6dae8acdf3e7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f789082fea8d42c09f1cfc5119f827408daba22c3228980c8f6dae8acdf3e7c2->enter($__internal_f789082fea8d42c09f1cfc5119f827408daba22c3228980c8f6dae8acdf3e7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

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
        
        $__internal_f789082fea8d42c09f1cfc5119f827408daba22c3228980c8f6dae8acdf3e7c2->leave($__internal_f789082fea8d42c09f1cfc5119f827408daba22c3228980c8f6dae8acdf3e7c2_prof);

        
        $__internal_0c6c288d6a5cdf112626a5ab0b722827455028f774ec9bbaa07f5fc54a390297->leave($__internal_0c6c288d6a5cdf112626a5ab0b722827455028f774ec9bbaa07f5fc54a390297_prof);

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
", "LiipImagineBundle:Form:form_div_layout.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\liip\\imagine-bundle/Resources/views/Form/form_div_layout.html.twig");
    }
}
