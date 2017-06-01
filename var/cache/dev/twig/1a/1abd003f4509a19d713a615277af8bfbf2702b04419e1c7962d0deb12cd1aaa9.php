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
        $__internal_42c04b0314f1cf6909a65b8b7feb8daa1bfb53da3898da2995821346050d5095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c04b0314f1cf6909a65b8b7feb8daa1bfb53da3898da2995821346050d5095->enter($__internal_42c04b0314f1cf6909a65b8b7feb8daa1bfb53da3898da2995821346050d5095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        $__internal_7521c79d6ae79704f8ba048937e81d2fd2d8b85484132e7945381b95f3722e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7521c79d6ae79704f8ba048937e81d2fd2d8b85484132e7945381b95f3722e1f->enter($__internal_7521c79d6ae79704f8ba048937e81d2fd2d8b85484132e7945381b95f3722e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
        
        $__internal_42c04b0314f1cf6909a65b8b7feb8daa1bfb53da3898da2995821346050d5095->leave($__internal_42c04b0314f1cf6909a65b8b7feb8daa1bfb53da3898da2995821346050d5095_prof);

        
        $__internal_7521c79d6ae79704f8ba048937e81d2fd2d8b85484132e7945381b95f3722e1f->leave($__internal_7521c79d6ae79704f8ba048937e81d2fd2d8b85484132e7945381b95f3722e1f_prof);

    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        $__internal_949858a2c327b4d6f915ccf09d708ae4a82cf52644ed0274659f48fe0bd4d883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949858a2c327b4d6f915ccf09d708ae4a82cf52644ed0274659f48fe0bd4d883->enter($__internal_949858a2c327b4d6f915ccf09d708ae4a82cf52644ed0274659f48fe0bd4d883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        $__internal_f8703885e71a223cd33ea4cb443c0bca4577bd93d84c7a2ef55d3157d35f5e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8703885e71a223cd33ea4cb443c0bca4577bd93d84c7a2ef55d3157d35f5e2d->enter($__internal_f8703885e71a223cd33ea4cb443c0bca4577bd93d84c7a2ef55d3157d35f5e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

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
        
        $__internal_f8703885e71a223cd33ea4cb443c0bca4577bd93d84c7a2ef55d3157d35f5e2d->leave($__internal_f8703885e71a223cd33ea4cb443c0bca4577bd93d84c7a2ef55d3157d35f5e2d_prof);

        
        $__internal_949858a2c327b4d6f915ccf09d708ae4a82cf52644ed0274659f48fe0bd4d883->leave($__internal_949858a2c327b4d6f915ccf09d708ae4a82cf52644ed0274659f48fe0bd4d883_prof);

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
