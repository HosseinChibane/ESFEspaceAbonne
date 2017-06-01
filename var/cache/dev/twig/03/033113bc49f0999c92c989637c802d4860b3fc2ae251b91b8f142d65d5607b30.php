<?php

/* ESFEspaceAbonneBundle:back:mesParametres.html.twig */
class __TwigTemplate_93e879d1f011c414128e2310be2885d59b7695cc9e8f10f18b3fefcd9e4034c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesParametres.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3501f25109d1998ef8631b411a4c0f5a3b3f654722e3e2e386e9914fe05f469f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3501f25109d1998ef8631b411a4c0f5a3b3f654722e3e2e386e9914fe05f469f->enter($__internal_3501f25109d1998ef8631b411a4c0f5a3b3f654722e3e2e386e9914fe05f469f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametres.html.twig"));

        $__internal_87b0e73062941fba853cc65f98ba99c572bdd34fb18ff0e7c670e7e3d9e14d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b0e73062941fba853cc65f98ba99c572bdd34fb18ff0e7c670e7e3d9e14d74->enter($__internal_87b0e73062941fba853cc65f98ba99c572bdd34fb18ff0e7c670e7e3d9e14d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3501f25109d1998ef8631b411a4c0f5a3b3f654722e3e2e386e9914fe05f469f->leave($__internal_3501f25109d1998ef8631b411a4c0f5a3b3f654722e3e2e386e9914fe05f469f_prof);

        
        $__internal_87b0e73062941fba853cc65f98ba99c572bdd34fb18ff0e7c670e7e3d9e14d74->leave($__internal_87b0e73062941fba853cc65f98ba99c572bdd34fb18ff0e7c670e7e3d9e14d74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca818e966ac5af57084e231104d7535fed891e8f41f4521245d00cf52d1e6413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca818e966ac5af57084e231104d7535fed891e8f41f4521245d00cf52d1e6413->enter($__internal_ca818e966ac5af57084e231104d7535fed891e8f41f4521245d00cf52d1e6413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c1e704dcb0125adb980dd1cab036b792474ff3be71b41816cf48c516d1be94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1e704dcb0125adb980dd1cab036b792474ff3be71b41816cf48c516d1be94f->enter($__internal_8c1e704dcb0125adb980dd1cab036b792474ff3be71b41816cf48c516d1be94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c1e704dcb0125adb980dd1cab036b792474ff3be71b41816cf48c516d1be94f->leave($__internal_8c1e704dcb0125adb980dd1cab036b792474ff3be71b41816cf48c516d1be94f_prof);

        
        $__internal_ca818e966ac5af57084e231104d7535fed891e8f41f4521245d00cf52d1e6413->leave($__internal_ca818e966ac5af57084e231104d7535fed891e8f41f4521245d00cf52d1e6413_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f60a434ae804ed0d2e64cd44e8461b55acf4a8847e693e5c5010d8c3d14cc03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60a434ae804ed0d2e64cd44e8461b55acf4a8847e693e5c5010d8c3d14cc03f->enter($__internal_f60a434ae804ed0d2e64cd44e8461b55acf4a8847e693e5c5010d8c3d14cc03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_281ec2144d5dfba29927c7d54d961e6c948b9f5576658c3308b260310a2a2002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281ec2144d5dfba29927c7d54d961e6c948b9f5576658c3308b260310a2a2002->enter($__internal_281ec2144d5dfba29927c7d54d961e6c948b9f5576658c3308b260310a2a2002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
  <!-- Mes Parametres -->
  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  
  ";
        // line 11
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 12
            echo "    <div class=\"alert alert-error\">
      ";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    </div>
  ";
        }
        // line 16
        echo "
  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
       ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
       ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit"), "html", null, true);
        echo "\" />
      </div>
      ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>            
  </div>      
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

  </div>
</div>
";
        
        $__internal_281ec2144d5dfba29927c7d54d961e6c948b9f5576658c3308b260310a2a2002->leave($__internal_281ec2144d5dfba29927c7d54d961e6c948b9f5576658c3308b260310a2a2002_prof);

        
        $__internal_f60a434ae804ed0d2e64cd44e8461b55acf4a8847e693e5c5010d8c3d14cc03f->leave($__internal_f60a434ae804ed0d2e64cd44e8461b55acf4a8847e693e5c5010d8c3d14cc03f_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesParametres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  142 => 38,  137 => 36,  133 => 35,  129 => 34,  121 => 29,  115 => 26,  110 => 24,  105 => 22,  101 => 21,  97 => 20,  91 => 16,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block Content %} 
  <!-- Mes Parametres -->
  {{ form_start(form) }}
  
  {% if not form.vars.valid %}
    <div class=\"alert alert-error\">
      {{ form_errors(form) }}
    </div>
  {% endif %}

  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        {{dump(form)}}
       {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
       {{ form_widget(form) }}
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'change_password.submit'|trans }}\" />
      </div>
      {{ form_end(form) }}
    </div>            
  </div>      
  {{ form_end(form) }}
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{dump(form)}}
    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
    {{ form_end(form) }}

  </div>
</div>
{% endblock %}", "ESFEspaceAbonneBundle:back:mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesParametres.html.twig");
    }
}
